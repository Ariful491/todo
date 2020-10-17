@extends('public.master')
@section('title')
    <title>Todo::Search number</title>
    @endsection
@section('body')

    <div class="container">
                   <div class="row">
                       <div class="col-md-12 pt-5">
                           <div class="alert alert-dark alert-dismissible fade show" role="alert" >
                               <button type="button" style="margin: 0 0 0 0!important; float: none;padding: 0!important; height: 50px!important;width: 50px!important;" class="close btn-warning" data-dismiss="alert" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                               <i >N.B:</i> Please Press  keyboard Digits .

                           </div>
                       </div>
                   </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-md-2 text-center mt-lg-5">
                <div class="" style="cursor: pointer" id="see_all"><button>see all</button></div>
                <div class="card" id="all_number" style="display: none">
                </div>
            </div>
            <div class="col-md-5 offset-md-3">
                <div class="card mt-lg-5">
                    <div class="card-header">
                        <div class="suggest text-right" id="dynamic_number" style="display: none">

                        </div>
                        <div class="fonded-total"   >
                            <p >Total Found # <span class="h4" id="found_total"> </span></p>
{{--                            @if(Session::get('number_found'))--}}
{{--                            <h6>total found #{{Session::get('number_found')}}</h6>--}}
{{--                            @endif--}}
                        </div>
                        <div class="calculator" >

                            <!-- display -->

                                <input type="text"  class="display" name="search" value="" id="search">


                            <div class="text-right " style="margin-top: -93px;margin-right:-10px;">
                                <button value="C" class="btn btn-outline-danger">&times;</button>
                            </div>
                            <!-- keys -->
                            <div class="keys" >
                                <!-- 4 rows of keys -->
                                <div class="row">
                                    <button value="1">1</button>
                                    <button value="2">2</button>
                                    <button value="3">3</button>


                                </div>
                                <div class="row">
                                    <button value="4">4</button>
                                    <button value="5">5</button>
                                    <button value="6">6</button>


                                </div>
                                <div class="row">

                                    <button value="7">7</button>
                                    <button value="8">8</button>
                                    <button value="9">9</button>

                                </div>
                                <div class="row">
                                    <button value="*" class="operator">*</button>
                                    <button value="0">0</button>
                                    <button value="#" class="operator">#</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
