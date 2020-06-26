<div class="portlet mt-element-ribbon light portlet-fit">
    <div class="ribbon ribbon-vertical-right ribbon-shadow ribbon-color-primary uppercase">
        <div class="ribbon-sub ribbon-bookmark">
        </div>
        <i class="fa fa-star"></i>
    </div>
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-green"></i>
            <span class="caption-subject font-green bold uppercase">Star Performer</span>
        </div>
    </div>
    <div class="portlet-body">
    <div class="row">
        @foreach($user as $user_data)
        <?php
        if($user_data->photo=="")
            $photo='uploads/users/'.$user_data->gender.".jpg";
        else
            $photo='uploads/users/'.$user_data->photo;
        ?>
        <div class="col-md-6">
        <img src="{{asset($photo)}}" class="img-responsive rounded tooltips" style="height:21%;" data-original-title="{{$user_data->name}}">
        </div>
        @endforeach
        </div>
    </div>
</div>
