@extends('frontend.global.master')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span class="ml-1">Email</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Inbox</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="email-left-box px-0 mb-5">
                        <div class="p-0">
                            <a href="email-compose.html" class="btn btn-primary btn-block">Compose</a>
                        </div>
                        <div class="mail-list mt-4">
                            <a href="email-inbox.html" class="list-group-item active"><i
                                    class="fa fa-inbox font-18 align-middle mr-2"></i> Inbox <span
                                    class="badge badge-primary badge-sm float-right">198</span> </a>
                            <a href="javascript:void()" class="list-group-item"><i
                                    class="fa fa-paper-plane font-18 align-middle mr-2"></i>Sent</a> <a href="javascript:void()" class="list-group-item"><i
                                    class="fa fa-star font-18 align-middle mr-2"></i>Important <span
                                    class="badge badge-danger text-white badge-sm float-right">47</span>
                            </a>
                            <a href="javascript:void()" class="list-group-item"><i
                                    class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft</a><a href="javascript:void()" class="list-group-item"><i
                                    class="fa fa-trash font-18 align-middle mr-2"></i>Trash</a>
                        </div>
                        <div class="intro-title d-flex justify-content-between">
                            <h5>Categories</h5>
                            <i class="icon-arrow-down" aria-hidden="true"></i>
                        </div>
                        <div class="mail-list mt-4">
                            <a href="email-inbox.html" class="list-group-item"><span class="icon-warning"><i
                                        class="fa fa-circle" aria-hidden="true"></i></span>
                                Work </a>
                            <a href="email-inbox.html" class="list-group-item"><span class="icon-primary"><i
                                        class="fa fa-circle" aria-hidden="true"></i></span>
                                Private </a>
                            <a href="email-inbox.html" class="list-group-item"><span class="icon-success"><i
                                        class="fa fa-circle" aria-hidden="true"></i></span>
                                Support </a>
                            <a href="email-inbox.html" class="list-group-item"><span class="icon-dpink"><i
                                        class="fa fa-circle" aria-hidden="true"></i></span>
                                Social </a>
                        </div>
                    </div>
                    <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                        <div role="toolbar" class="toolbar ml-4 ml-sm-0">
                            <div class="btn-group mb-4">
                                <span class="btn btn-dark ml-3">
                                    <input type="checkbox">
                                </span>
                                <button class="btn btn-dark" type="button"><i class="ti-reload"></i>
                                </button>
                            </div>
                            <div class="btn-group mb-4">
                                <button aria-expanded="false" data-toggle="dropdown" class="btn btn-dark dropdown-toggle" type="button">More <span
                                        class="caret"></span>
                                </button>
                                <div class="dropdown-menu"> <a href="javascript: void(0);" class="dropdown-item">Mark as Unread</a> <a href="javascript: void(0);" class="dropdown-item">Add to Tasks</a>
                                    <a href="javascript: void(0);" class="dropdown-item">Add Star</a> <a href="javascript: void(0);" class="dropdown-item">Mute</a>
                                </div>
                            </div>
                        </div>
                        <div class="email-list mt-4">
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message unread">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message unread">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message unread">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Ingredia Nutrisha, A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message unread">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                            <div class="message">
                                <div>
                                    <div class="d-flex message-single">
                                        <div class="custom-control custom-checkbox pl-4">
                                            <input type="checkbox">
                                        </div>
                                        <div class="ml-2">
                                            <button class="border-0 bg-transparent align-middle p-0"><i
                                                    class="fa fa-star" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <a href="email-read.html" class="col-mail col-mail-2">
                                        <div class="subject">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of</div>
                                        <div class="date">11:49 am</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- panel -->
                        <div class="row mt-4 m-4 mx-sm-4">
                            <div class="col-7">
                                <div class="text-left">1 - 20 of 568</div>
                            </div>
                            <div class="col-5">
                                <div class="btn-group float-right">
                                    <button class="btn btn-dark" type="button"><i
                                            class="fa fa-angle-left"></i>
                                    </button>
                                    <button class="btn btn-dark" type="button"><i
                                            class="fa fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection