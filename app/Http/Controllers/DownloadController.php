<?php

namespace App\Http\Controllers;

use DB;
use App\Epic;
use App\Feature;
use App\Story;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Modules\Recruitment\Entities\Question;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\Log;

class DownloadController extends Controller
{
    public function developementcells($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'DevelopementCell_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'DAS_ID'            => $model->das_id,
                'Name'              => $model->name,
                'Designation'       => $model->designation,
                'Email'             => $model->email,
                'Mobile Number'     => $model->mobile_number,
                'Address'           => $model->address,
                'Emergency Mobile'  => $model->emergency_mobile,
            ];
        });
    }

    public function epicsList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Epic_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {

            $tasks = Epic::find($model->id)->tasks;
            $countCompleted = $tasks->whereIn('dev_status', ['SIT', 'Completed'])->count()??0;
            if( $tasks->count() == 0 )
                $statusPercentage = $countCompleted*100;
            else
                $statusPercentage = ($countCompleted/$tasks->count())*100;

            $statusPercentage = round($statusPercentage, 1);

            return [
                'Epic Name'       => $model->name,
                'Description'     => $model->description,
                'HLE in PD'	      => $model->hle??0,
                'Size in PD'      => ceil( $tasks->sum('size')/8 ),
                'Progress'     	  => $statusPercentage.'%',
                'Priority' 	      => $model->priority,
                'Business Value'  => number_format($model->hle * env('BUSINESS_VALUE')),
                'Go Live Date'    => Carbon::parse($model->go_live_date)->format('d-m-Y'),
                'Epic Approval'   => $model->epic_approval?'Approved':'Pending Approval'
            ];
        });
    }

   public function leavesList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Leave_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'User Name'            => $model->user_name,
                'Reason'               => $model->reason,
                'From Date'            => $model->from_date,
                'To Date'              => $model->to_date,
                'Status'               => $model->status,
                'Approver Name'        => $model->approver_name,
                'Approver Comment'     => $model->approver_comment,
                    ];
        });
    }


    public function filemanagementList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Filemanagement_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'File Name'             => $model->file_name,
                'Details'               => $model->details,
                'Uploaded By'          => $model->user_id,
                'version'            => $model->version,
                'File'               => $model->file_path,

                    ];
        });
    }
    public function featuresList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Feature_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {

            $tasks = Feature::find($model->id)->tasks;
            $countCompleted = $tasks->whereIn('dev_status', ['SIT', 'Completed'])->count()??0;
            if( $tasks->count() == 0 )
                $statusPercentage = $countCompleted*100;
            else
                $statusPercentage = ($countCompleted/$tasks->count())*100;

            $statusPercentage = round($statusPercentage, 1);

            return [
                'Epic Name'     => $model->epic_name,
                'Feature Name'  => $model->feature_name,
                'Description'   => $model->description,
                'Size'          => ceil( $tasks->sum('size')/8 ),
                'Progress'      => $statusPercentage.'%',
                'Business value'=> $model->business_value??0,
            ];
        });
    }

    public function usersList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'usersList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Name'              => $model->name,
                'Email'             => $model->email,
                'Mobile'            => $model->mobile
            ];
        });
    }

    public function trainingList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'trainingList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'User Name'              => $model->user_id,
                'Attendance'             => $model->attendance?'Present':'Absent',
                'Feedback'               => $model->feedback
            ];
        });
    }
    public function tasksList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Task_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Task Name'             => $model->task_name,
                'Story Name'            => $model->story_name,
                'Description'           => $model->description,
                'Dev Status'            => $model->dev_status,
                'Developer'             => $model->developer,
                'Start Date'            => $model->start_date?Carbon::parse($model->start_date)->format('d-m-Y'):null,
                'End Date'              => $model->end_date?Carbon::parse($model->end_date)->format('d-m-Y'):null,
                'Priority'              => $model->priority,
                'Dependency'            => $model->dependency?'Yes':'No',
                'Dependency Detail'     => $model->dependency_detail,
                'Actual'                => $model->actual,
                'Size'                  => ($model->size??0).' hrs',
                'Cell Name'             => $model->cell_name,
                'Dependency Cell Name'  => $model->dependency_cell,
            ];
        });
    }
    public function serverList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'serverList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [

                'Server Name'           => $model->server_name,
                'Project Name'          => $model->project_name,
                'Description'           => $model->description,
                'Server Type'           => $model->server_type,
                'Server Ip'             => $model->server_ip,
                'Server Info'           => $model->server_info,
                'Application Info'      => $model->application_info,
                'Datacenter'            => $model->datacenter,
                'Root User'             => $model->root_user,
                'Status'                => $model->status?'Activated':'Deactivated',
            ];
        });
    }
    public function upcomingenhancementList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'upcomingenhancementList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [

                'Details'               => $model->details,
                'Date'                  => $model->date,

            ];
        });
    }
    public function serverMappingList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'serverMappingList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [

                'Server Name'           => $model->server_name,
                'User'             => $model->user_name,
                'Usename'           => $model->username,

            ];
        });
    }
    public function storiesList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Story_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {

             $tasks = story::find($model->id)->tasks;
            $countCompleted = $tasks->whereIn('dev_status', ['SIT', 'Completed'])->count()??0;
            if( $tasks->count() == 0 )
                $statusPercentage = $countCompleted*100;
            else
                $statusPercentage = ($countCompleted/$tasks->count())*100;

            $statusPercentage = round($statusPercentage, 1);

            return [
                'Feature Name'   => $model->feature_name,
                'Story Name'    => $model->story_name,
                'Cell Name'     => $model->cell_name,
                'Description'   => $model->description,
                'Story Points'  => $model->story_points,
                'Priority'      => $model->priority,
                'Size'          => ($model->size??0).' hrs',
                'Progress'      => $statusPercentage.'%'
            ];
        });
    }

    public function retrospectivesList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Retrospectives_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Sprint Name'            => $model->sprint_name,
                'Star Performer'         => $model->star_performer,
                'Good'                   => $model->good,
                'Bad'                    => $model->bad,
                'Idea'                   => $model->idea,
                'Action Point'           => $model->action_point
            ];
        });
    }

    public function developement_cellsList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'developement_cellsList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Project Name'      => $model->project_name,
                'Cell Name'         => $model->name,
                'Cell Description'  => $model->description
            ];
        });
    }
   public function cellrolesList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'cellrolesList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Cell Name'          => $model->cell_name,
                'User Name'                     => $model->user_name,
                'Role Name'                     => $model->role_name
            ];
        });
    }

    public function sprintsList($input,$parameter)
     {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'sprintsList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Sprint'        => 'Sprint - '.$model->sprint,
                'Cell Name'     => $model->cell_name,
                'Start Date'    => $model->start_date,
                'End Date'      => $model->end_date,
                'Status'        => $model->status
            ];
        });
    }

    public function rolesList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'rolesList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Name'          => $model->name,
                'Description'   => $model->description
            ];
        });
    }

    public function task_user_mapsList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'TaskUserMap_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Task Name'   => $model->task_name,
                'User Name'    => $model->user_name,
                'Start date'   => $model->start_date,
                'End Date'      => $model->end_date,
                'Task Size'     => $model->task_size
            ];

        });
     }
     public function user_department_mapsList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'user_department_mapsList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {

            return [
                'User Name'   => $model->user_name,
                'Department Name'    => $model->department_name
            ];

        });
    }


    public function user_cell_mapsList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'user_cell_mapsList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Cell Name'             => $model->developementcell_name,
                'User Name'             => $model->user_name,
            ];
        });
    }

    public function delivery_unitsList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'delivery_unitsList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Name'          => $model->name,
                'Description'   => $model->description,
            ];
        });
    }

    public function reporting_managersList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'reporting_managersList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'User Name'     => $model->user_name,
                 'Approver Name' =>$model->approver_name,
            ];
        });
    }

    public function my_tasksList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'my_tasksList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [

                'User Name'     => $model->user_name,
                'Task Type  ' =>$model->task_type,
                'Description'     => $model->description,
                'Dependency'     => $model->dependency,
                'Due Date'     => $model->due_date

            ];
        });
    }
    public function holidayList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Holiday_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Holiday Name'    => $model->holiday_name,
                'Date'            => $model->date,
                'Location Name'   => $model->location_name  ,
            ];
        });
    }
    public function locationList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Location_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Location Name'    => $model->location_name
            ];
        });
    }
    public function departmentList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'Department_List_Download'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Department Name'    => $model->department_name
            ];
        });
    }

     public function projectsList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'projectsList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Project Name'          => $model->name,
                'Project Description'   => $model->description,
                'Delivery Unit Name'    => $model->delivery_name
            ];
        });
     }

     public function star_performersList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'star_performersList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'User Name'                    => $model->user_name,
		'DevelopmentCell Name'         => $model->developmentcell_name,
		'Sprint Name'		       =>$model->sprint_name

            ];
        });
    }

    public function cellrolepermissionList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'cellrolepermissionList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Cell Name'            => $model->cell_name,
		     'Role Name'               => $model->role_name,
		     'Permission Name'		            =>$model->permission_name

            ];
        });
    }
    public function permissionList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .'permissionList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'Permission Name'            => $model->name,
		     'Display Name'               => $model->display_name

            ];
        });
    }
    public function  momMasterList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .' momMasterList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'From Mail'           => $model->from_mail,
                'To Mail'             => $model->to_mail,
                'Dev Cell Name'       => $model->dev_cell_name,
                'Subject'             => $model->subject,
                'Attendees'           => $model->attendees
            ];
        });
    }
    public function  momList($input,$parameter)
    {
        $models     = DB::select($input,$parameter);
        $list       = collect($models);
        $filename   = public_path('downloads') . '/' .' momList'.time().'.xlsx';
        return (new FastExcel($list))->export($filename, function ($model) {
            return [
                'From Mail'           => $model->from_mail,
                'To Mail'             => $model->to_mail,
                'Dev Cell Name'       => $model->dev_cell_name,
                'Subject'             => $model->subject,
                'Attendees'           => $model->attendees,
                'Description'          => $model->description,
                'Attachement'          => $model->attachement
            ];
        });
    }
     public function user_delivery_unitsList($input,$parameter)
     {
	     $models     = DB::select($input,$parameter);
	     $list       = collect($models);
	     $filename   = public_path('downloads') . '/' .'user_delivery_unitsList'.time().'.xlsx';
	     return (new FastExcel($list))->export($filename, function ($model) {
		     return [
			     'User Name'                    => $model->user_name,
			     'DeliveryUnit Name'            => $model->deliveryunit_name
		     ];
	     });
     }

    public function rusersList($input, $parameter)
    {
	     $models     = DB::select($input,$parameter);
	     $list       = collect($models);
	     $filename   = public_path('downloads') . '/' .'recruitment-usersList'.time().'.xlsx';
	     return (new FastExcel($list))->export($filename, function ($model) {

             $total_questions = Question::select('questions.answer as actual','user_questions.answer as user_answer')
                 ->join('recruitment.user_questions', 'user_questions.question_id', 'questions.id')
                 ->where('user_questions.user_id', $model->id)
                 ->get();

                $total = $total_questions->count();
                $correct = $total_questions->filter(function($item, $key){
                    return $item->user_answer==$item->actual;
                })->count();

                $score = $correct.'/'.$total;

                $percentage = '0';
                if($total != 0)
                    $percentage =  ceil(($correct / $total)*100);

            return [
			     'Name'         => $model->name,
                 'Email'        => $model->email,
                 'Gender'       => $model->gender,
                 'Mobile Number'=> $model->mobile_no,
                 'Date of Birth'=> $model->date_of_birth,
                 'Branch'       => $model->branch,
                 'Reference'    => $model->reference,
                 'score'        => $score,
                 'Percentage'   => $percentage,
		     ];
	     });
    }
}
