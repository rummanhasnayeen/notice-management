@extends('layouts.app')
<style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 100px;
    }
    #shadow{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }


</style>
@section('content')
<div class="container mt-4 pt-5" >
   @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                   @endif

                   @if(session('response'))
                   <div class="alert alert-success">{{session('response')}}</div>
                   @endif
    <div class="row" >
      
        <div class="col-md-8 mb-4">
          <h3>All Posts</h3>
                  @if(count($posts)> 0)
                       @foreach($posts->all() as $post)
                  <!-- Status -->
          <div class="card mb-4 wow fadeIn">

                            <img src="{{$post->post_image}}" class="img-fluid" alt="">



                            <!--Card content-->
                            <div class="card-body">
                               <blockquote class="blockquote">

                                <div class="media d-block d-md-flex mt-3">
                                   @if(!empty($profile->profile_pic))
                                    <img class="d-flex mb-3 mx-auto z-depth-1" src="{{ $profile->profile_pic }}" alt="Generic placeholder image"
                                        style="width: 100px;">
                                        @else
                     <img src=" {{url('images/avatar.png')}} " class="avatar" alt="">
                    @endif
                                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                                        <h4 class="h5 my-1 font-weight-bold">{{$post->post_title}}
                                        </h4>
                                        <p class="mb-0" >{{substr($post->post_body,0,150) }}</p>
                                        <footer class="blockquote-footer">Posted On: {{date('M j, Y H:i', strtotime($post->updated_at))}}
                                        <!-- <cite title="Source Title">Source Title</cite> -->
                                    </footer>

                                    <a href='#'>
     <button type="button" class="btn btn-outline-primary waves-effect btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>  View</button>
   </a>
   <a href='#'>
      <button type="button" class="btn btn-outline-primary waves-effect btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>  Edit</button>
    </a>
    @if($post->user_id == $profile->user_id)
    <a href='{{ url("/removepost/{$post->post_title}")}}' onclick="return confirm('Do you really want to approve this post? ');">
       <button type="button" class="btn btn-outline-primary waves-effect btn-sm"> <i class="fa fa-trash-o" aria-hidden="true" ></i>  Delete</button>
     </a>
     @endif
                        
                                    </div>
                                </div>
                              </blockquote>

                            </div>


                        </div>
                      
                @endforeach

                       @else
                       <p>No post available</p>

                       @endif           <!-- Status End -->
            
        </div>
        <!-- Left side end -->

        <!-- right side -->

        <div class="col-md-4 mb-4">

                    <!-- Categories -->

          <div class="card mb-4 text-center wow fadeIn fixed">

                            <div class="card-header">Categories</div>

                            <!--Card content-->
                            <div class="card-body">
                              <ul class="list-group ">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Exam
        <span class="badge badge-primary badge-pill">14</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
       Alumni
        <span class="badge badge-primary badge-pill">2</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        Carnival
        <span class="badge badge-primary badge-pill">1</span>
    </li>
</ul>
                            </div>
                          </div>

                            <!-- Categories end -->

                             <!-- Related Articles Card-->
                        <div class="card mb-4 text-center wow fadeIn">

                            <div class="card-header">Related articles</div>

                            <!--Card content-->
                            <div class="card-body">

                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <a href="">
                                                <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                            </a>
                                            Cras sit amet nibh libero, in gravida nulla (...)
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                                        <div class="media-body">
                                            <a href="">
                                                <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                            </a>
                                            Cras sit amet nibh libero, in gravida nulla (...)
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <a href="">
                                                <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                            </a>
                                            Cras sit amet nibh libero, in gravida nulla (...)
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <!--/Related articles.Card-->
        </div>


        <!-- right side end-->

    </div>
</div>
@endsection
