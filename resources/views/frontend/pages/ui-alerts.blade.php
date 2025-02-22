@extends('frontend.global.master')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <p class="mb-0">Your business dashboard template</p>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Alert</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Basic Alerts</h4>
                    <p class="subtitle mb-0">Bootstrap default style</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary"><strong>Welcome!</strong> Message has been sent.</div>
                    <div class="alert alert-secondary"><strong>Done!</strong> Your profile photo updated.
                    </div>
                    <div class="alert alert-success"><strong>Success!</strong> Message has been sent.</div>
                    <div class="alert alert-info"><strong>Info!</strong> You have got 5 new email.</div>
                    <div class="alert alert-warning"><strong>Warning!</strong> Something went wrong. Please check.
                    </div>
                    <div class="alert alert-danger"><strong>Error!</strong> Message sending failed.</div>
                    <div class="alert alert-dark"><strong>Error!</strong> You successfully read this important alert message.</div>
                    <div class="alert alert-light"><strong>Error!</strong> You successfully read this message..
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Solid color alerts</h4>
                    <p class="subtitle mb-0">add <code>.solid</code> class to change the solid color.</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary solid "><strong>Welcome!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-secondary solid"><strong>Done!</strong> Your profile photo updated.
                    </div>
                    <div class="alert alert-success solid "><strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-info solid "><strong>Info!</strong> You have got 5 new email.
                    </div>
                    <div class="alert alert-warning solid "><strong>Warning!</strong> Something went wrong. Please check.</div>
                    <div class="alert alert-danger solid "><strong>Error!</strong> Message sending failed.
                    </div>
                    <div class="alert alert-dark solid"><strong>Error!</strong> You successfully read this important alert message.</div>
                    <div class="alert alert-light solid"><strong>Error!</strong> You successfully read this message..
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Square alerts</h4>
                    <p class="mb-0 subtitle">add <code>.alert-square</code> class to change the solid color.
                    </p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary solid alert-square"><strong>Welcome!</strong> Message has been sent.</div>
                    <div class="alert alert-secondary solid alert-square"><strong>Done!</strong> Your profile photo updated.</div>
                    <div class="alert alert-success solid alert-square "><strong>Success!</strong> Message has been sent.</div>
                    <div class="alert alert-info solid alert-square "><strong>Info!</strong> You have got 5 new email.</div>
                    <div class="alert alert-warning solid alert-square "><strong>Warning!</strong> Something went wrong. Please check.</div>
                    <div class="alert alert-danger solid alert-square "><strong>Error!</strong> Message sending failed.</div>
                    <div class="alert alert-dark solid alert-square"><strong>Error!</strong> You successfully read this important alert message.</div>
                    <div class="alert alert-light solid alert-square"><strong>Error!</strong> You successfully read this message..</div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Rounded alerts</h4>
                    <p class="mb-0 subtitle">add <code>.alert-rounded</code> class to change the solid color.
                    </p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary solid alert-rounded"><strong>Welcome!</strong> Message has been sent.</div>
                    <div class="alert alert-secondary solid alert-rounded"><strong>Done!</strong> Your profile photo updated.</div>
                    <div class="alert alert-success solid alert-rounded "><strong>Success!</strong> Message has been sent.</div>
                    <div class="alert alert-info solid alert-rounded "><strong>Info!</strong> You have got 5 new email.</div>
                    <div class="alert alert-warning solid alert-rounded "><strong>Warning!</strong> Something went wrong. Please check.</div>
                    <div class="alert alert-danger solid alert-rounded "><strong>Error!</strong> Message sending failed.</div>
                    <div class="alert alert-dark solid alert-rounded"><strong>Error!</strong> You successfully read this important alert message.</div>
                    <div class="alert alert-light solid alert-rounded"><strong>Error!</strong> You successfully read this message..</div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Dismissable Alerts</h4>
                    <p class="subtitle mb-0">Bootstrap default style</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-secondary alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-info alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Info!</strong> You have got 5 new email.
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> Something went wrong. Please check.
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-dark alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-light alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Alerts alt</h4>
                    <p class="mb-0 subtitle">add <code>.alert-alt</code> class to change the solid color.
                    </p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-secondary alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-success alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-info alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Info!</strong> You have got 5 new email.
                    </div>
                    <div class="alert alert-warning alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> Something went wrong. Please check.
                    </div>
                    <div class="alert alert-danger alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-dark alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-light alert-dismissible alert-alt fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Solid Alt</h4>
                    <p class="mb-0 subtitle">add <code>.alert-alt.solid</code> class to change the solid color.
                    </p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary alert-dismissible alert-alt solid fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-secondary alert-dismissible alert-alt solid fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-success alert-dismissible alert-alt solid fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-info alert-dismissible alert-alt solid fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Info!</strong> You have got 5 new email.
                    </div>
                    <div class="alert alert-warning alert-dismissible alert-alt solid fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> Something went wrong. Please check.
                    </div>
                    <div class="alert alert-danger alert-dismissible alert-alt solid fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-dark alert-dismissible alert-alt solid fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-light alert-dismissible alert-alt solid fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Dismissable with solid</h4>
                    <p class="mb-0 subtitle">add <code>.solid</code> class to change the solid color.</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-secondary solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-success solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Success!</strong> Message has been sent.
                    </div>
                    <div class="alert alert-info solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Info!</strong> You have got 5 new email.
                    </div>
                    <div class="alert alert-warning solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> Something went wrong. Please check.
                    </div>
                    <div class="alert alert-danger solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-dark solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-light solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Alert with Link</h4>
                    <p class="mb-0 subtitle">Bootstrap default style</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
                            well</a>
                    </div>

                    <div class="alert alert-secondary alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
                            well</a>
                    </div>

                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>WOW! Eveything looks OK.</strong> <a href="#">Please check this one as
                            well</a>
                    </div>

                    <div class="alert alert-info alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Hey! Take a quick look.</strong> <a href="#">My birthday party</a>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> Why you did it to me! <a href="#">Check this out</a>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
                    </div>
                    <div class="alert alert-dark alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
                    </div>
                    <div class="alert alert-light alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Something Went wrong <a href="#">Click here for details.</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Alert with Link and solid color</h4>
                    <p class="mb-0 subtitle">add <code>.solid</code> class to change the solid color.</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> WOW! Eveything looks OK. <a href="#" class="btn btn-sm btn-light text-primary ml-3">upgrade</a>
                    </div>
                    <div class="alert alert-secondary solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> WOW! Eveything looks OK. <a href="#" class="btn btn-sm btn-light text-secondary ml-3">upgrade</a>
                    </div>
                    <div class="alert alert-success solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> WOW! Eveything looks OK. <a href="#" class="btn btn-sm btn-light text-success ml-3">upgrade</a>
                    </div>

                    <div class="alert alert-info solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Hey! Take a quick look. <a href="#" class="btn btn-sm btn-light text-info ml-3">upgrade</a>
                    </div>
                    <div class="alert alert-warning solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> Why you did it to me! <a href="#" class="btn btn-sm btn-light text-warning ml-3">upgrade</a>
                    </div>
                    <div class="alert alert-danger solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Something Went wrong <a href="#" class="btn btn-sm btn-light text-danger ml-3">upgrade</a>
                    </div>
                    <div class="alert alert-dark solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Something Went wrong <a href="#" class="btn btn-sm btn-light text-dark ml-3">upgrade</a>
                    </div>
                    <div class="alert alert-light solid alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Something Went wrong <a href="#" class="btn btn-sm btn-light text-dark ml-3">upgrade</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Inline Notifications</h4>
                    <p class="mb-0 subtitle">Default inline notification</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="alert alert-primary notification">
                                <p class="notificaiton-title"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                <button class="btn btn-primary btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-secondary notification">
                                <p class="notificaiton-title"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                <button class="btn btn-secondary btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-success notification">
                                <p class="notificaiton-title"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                <button class="btn btn-success btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-info notification">
                                <p class="notificaiton-title"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                <button class="btn btn-info btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-warning notification">
                                <p class="notificaiton-title"><strong>Success!</strong> Vampires The Romantic Ideology Behind Them</p>
                                <p>The following article covers a topic that has recently moved to center stage-at lease it seems that way.</p>
                                <button class="btn btn-warning btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-danger notification">
                                <p class="notificaiton-title"><strong>Danger! </strong> Religion And Science
                                </p>
                                <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                                <button class="btn btn-danger btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-dark notification">
                                <p class="notificaiton-title"><strong>Danger! </strong> Religion And Science
                                </p>
                                <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                                <button class="btn btn-dark btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-light notification">
                                <p class="notificaiton-title"><strong>Danger! </strong> Religion And Science
                                </p>
                                <p>What is the loop of Creation? How is there something from nothing? In spite of the fact.. </p>
                                <button class="btn btn-light btn-sm rounded-0">Confirm</button>
                                <button class="btn btn-link btn-sm">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Alert Icon Left</h4>
                    <p class="mb-0 subtitle">add <code>.alert-right-icon</code> to change the style</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary solid alert-right-icon alert-dismissible fade show">
                        <span><i class="mdi mdi-account-search"></i></span>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Success! Message has been sent.
                    </div>
                    <div class="alert alert-secondary solid alert-right-icon alert-dismissible fade show">
                        <span><i class="icon icon-bell-53"></i></span>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Success! Message has been sent.
                    </div>
                    <div class="alert alert-success solid alert-right-icon alert-dismissible fade show">
                        <span><i class="mdi mdi-check"></i></span>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Success! Message has been sent.
                    </div>
                    <div class="alert alert-info solid alert-right-icon alert-dismissible fade show">
                        <span><i class="mdi mdi-email"></i></span>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Info! You have got 5 new email.
                    </div>
                    <div class="alert alert-warning solid alert-right-icon alert-dismissible fade show">
                        <span><i class="mdi mdi-alert"></i></span>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> Something went wrong. Please check.
                    </div>
                    <div class="alert alert-danger solid alert-right-icon alert-dismissible fade show">
                        <span><i class="mdi mdi-help"></i></span>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-dark solid alert-right-icon alert-dismissible fade show">
                        <span><i class="mdi mdi-settings"></i></span>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-light solid alert-right-icon alert-dismissible fade show">
                        <span><i class="mdi mdi-cogs"></i></span>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Alert outline</h4>
                    <p class="mb-0 subtitle">add <code>.alert-outline-primary,secondary,success...</code> to change the style</p>
                </div>
                <div class="card-body">
                    <div class="alert alert-outline-primary alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Success! Message has been sent.
                    </div>
                    <div class="alert alert-outline-secondary alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Success! Message has been sent.
                    </div>
                    <div class="alert alert-outline-success alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Success! Message has been sent.
                    </div>
                    <div class="alert alert-outline-info alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button> Info! You have got 5 new email.
                    </div>
                    <div class="alert alert-outline-warning alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> Something went wrong. Please check.
                    </div>
                    <div class="alert alert-outline-danger alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-outline-dark alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                    <div class="alert alert-outline-light alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Error!</strong> Message Sending failed.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Alert Social</h4>
                    <p class="mb-0 subtitle">add <code>.alert-social
                            .facebook,.twitter,.linkedin,.google-plus</code> to change the style</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="alert alert-social facebook alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-social-icon">
                                        <span><i class="mdi mdi-facebook"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Facebook</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-social twitter alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-social-icon">
                                        <span><i class="mdi mdi-twitter"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Twitter</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-social linkedin alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-social-icon">
                                        <span><i class="mdi mdi-linkedin"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Linkedin</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-social google-plus alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-social-icon">
                                        <span><i class="mdi mdi-google-plus"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Google Plus</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Message Alert</h4>
                    <p class="subtitle mb-0">Bootstrap default style</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="alert alert-primary alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-secondary alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-info alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-warning alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-dark alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-light alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Message Alert with Solid color</h4>
                    <p class="mb-0 subtitle">add <code>.solid</code> to change the style</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="alert alert-primary solid alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-secondary solid alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-success solid alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-info solid alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-warning solid alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-danger solid alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-dark solid alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-light solid alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Notifications</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header d-block">
                    <h4 class="card-title">Alert left icon big </h4>
                    <p class="mb-0 subtitle">add <code>.left-icon-big</code> to change the style</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="alert alert-primary left-icon-big alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-left-icon-big">
                                        <span><i class="mdi mdi-email-alert"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-1 mb-1">Welcome to your account, Dear user!</h6>
                                        <p class="mb-2">Please confirm your email address: email@example.com
                                        </p>
                                        <a href="#" class="btn btn-light btn-sm text-primary">Resend </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-warning left-icon-big alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-left-icon-big">
                                        <span><i class="mdi mdi-help-circle-outline"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Pending!</h5>
                                        <p class="mb-2">You message sending failed.</p>
                                        <a href="#" class="btn btn-light btn-sm text-warning">Resend </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-success left-icon-big alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-left-icon-big">
                                        <span><i class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Congratulations!</h5>
                                        <p>You have successfully created a account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-left-icon-big">
                                        <span><i class="mdi mdi-alert"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">Loading failed!</h5>
                                        <p>Again upload your server</p>
                                    </div>
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