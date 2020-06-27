<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Util;
use DB;
use File;
use Auth;
use Session;
use DataTables;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    public function userData(Request $request)
    {

        if($request->getSettings==1)
        {
            $headers = [
                'avatar'             => '<i class="fa fa-user"></i>',
                'name'              => 'Name',
                'email'             => 'Email',
                'mobile'            => 'Mobile',
                'gender'            => 'Gender',
                'user_type_id'       => 'User Type',

            ];
           // if( $permission['edit'] || $permission['delete'] )
                $headers['action'] = 'Action';

            $searchFields = [
                'name'              => 'Name',
                'email'             => 'Email' ,
                'mobile'            => 'Mobile',
                'gender'            => 'Gender',
                'user_type_id'      => 'User Type',

            ];

            return ['columns' => $headers,'searchFields' => $searchFields];
        }

        $columns = ['id','avatar','name', 'email', 'mobile','gender','user_type_id'];
        $Ocolumns = ['name', 'email', 'mobile','gender','user_type_id'];


        # Pagination
        $limit = $request->length ? $request->length : 10;
        $offset = $request->start ? $request->start : 0;


        $models = User::select($columns);


        $model_count = clone $models;

        $modelFilter = $models->where(function($query) use($request)
        {
            if(is_array($request->searchData))
                foreach($request->searchData as $key=>$values)
                    foreach($values as $value)
                        $query->where($key, 'ILIKE', '%'.$value.'%');

        });
        $Filtermodel_count = clone $modelFilter;

        $modelFilter = $modelFilter->orderBy( $Ocolumns[ $request->order[0]['column'] ], $request->order[0]['dir']);

        //For Download XL Sheet
        $excelDownloadQuery = $modelFilter->toSql();
        $excelDownloadQueryParameter = $modelFilter->getBindings();

        $model_count = $model_count->count();

        $recordsFiltered = ( is_array($request->searchData) )?$Filtermodel_count->count():$model_count;

        $models = $modelFilter->offset($offset)
                              ->limit($limit)
                              ->get();

        return Datatables::of($models)
            ->filter(function ($query) use ($request) {
                $request->merge(['start' => 0]);
            })
            ->editColumn('avatar',function($models){

                if( $models->avatar )
                    $profileImageUrl = asset($models->avatar);
                else
                {
                    if($models->gender=='Male')
                        $profileImageUrl = asset('assets1/layouts/layout3/img/male.png');
                    else
                        $profileImageUrl = asset('assets1/layouts/layout3/img/female.png');
                }

                return '<img class="img-circle" width="29px" src="'.$profileImageUrl.'" >';
            })

            ->editColumn('name',function($models){
                return Util::shortText($models->name, 20);
            })
            ->editColumn('email',function($models){
                return Util::shortText($models->email, 25);
            })
            ->editColumn('mobile',function($models){
                return Util::shortText($models->mobile, 20);
            })

            ->addColumn('action', function ($models){
                $access = '';
                $model_id = encrypt($models->id);
                $space  = '&nbsp;&nbsp;';
            //    if( $permission['edit'] )
                    $access .= Util::getEditIcon( route('user.edit', [$models->id]) ).$space;
              //  if( $permission['delete'] )
                    $access .= Util::getDeleteIcon( $models->id ).$space;
                //if( $permission['other-user'] )
                    $access .= Util::getOtherUserLoginIcon( route('user.index', [encrypt($models->id)] ) ).$space;
                //if( $permission['reset_password'])
                    $access .= Util::getPasswordResetIcon( route('user.index', [encrypt($models->id)] ) ).$space;

            return $access;
            })
            ->setRowClass(function ($models) {
                return 'font-blue';
            })
            ->with(['downloadUrl'=>Util::downloadUrl('usersList', $excelDownloadQuery,$excelDownloadQueryParameter), 'recordsFiltered' => $recordsFiltered])
            ->setTotalRecords($model_count)
            ->escapeColumns(['*'])
            ->make(true);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
