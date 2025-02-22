@extends('frontend.global.master')
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome back!</h4>
                <span class="ml-1">Tab</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tab</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Default Tab</h4>
                </div>
                <div class="card-body">
                    <!-- Nav tabs -->
                    <div class="default-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#message">Message</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="pt-4">
                                    <h4>This is home title</h4>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="pt-4">
                                    <h4>This is profile title</h4>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="pt-4">
                                    <h4>This is contact title</h4>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="message">
                                <div class="pt-4">
                                    <h4>This is message title</h4>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Custom Tab 1</h4>
                </div>
                <div class="card-body">
                    <!-- Nav tabs -->
                    <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home1">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile1">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact1">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#message1">Message</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home1" role="tabpanel">
                                <div class="pt-4">
                                    <h4>This is home title</h4>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile1">
                                <div class="pt-4">
                                    <h4>This is profile title</h4>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact1">
                                <div class="pt-4">
                                    <h4>This is contact title</h4>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="message1">
                                <div class="pt-4">
                                    <h4>This is message title</h4>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nav Pills Tabs</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills mb-4">
                        <li class=" nav-item">
                            <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Tab One</a>
                        </li>
                        <li class="nav-item">
                            <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Tab Two</a>
                        </li>
                        <li class="nav-item">
                            <a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Tab Three</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="navpills-1" class="tab-pane active">
                            <div class="row">
                                <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                    <p>
                                        <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                </div>
                            </div>
                        </div>
                        <div id="navpills-2" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                    <p>
                                        <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                </div>
                            </div>
                        </div>
                        <div id="navpills-3" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                    <p>
                                        <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Nav Pills Tabs</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills justify-content-end mb-4">
                        <li class=" nav-item">
                            <a href="#navpills2-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Tab One</a>
                        </li>
                        <li class="nav-item">
                            <a href="#navpills2-2" class="nav-link" data-toggle="tab" aria-expanded="false">Tab Two</a>
                        </li>
                        <li class="nav-item">
                            <a href="#navpills2-3" class="nav-link" data-toggle="tab" aria-expanded="true">Tab Three</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="navpills2-1" class="tab-pane active">
                            <div class="row">
                                <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                    <p>
                                        <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                </div>
                            </div>
                        </div>
                        <div id="navpills2-2" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                    <p>
                                        <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                </div>
                            </div>
                        </div>
                        <div id="navpills2-3" class="tab-pane">
                            <div class="row">
                                <div class="col-md-12"> Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica.
                                    <p>
                                        <br /> Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vertical Nav Pill</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="nav flex-column nav-pills">
                                <a href="#v-pills-home" data-toggle="pill" class="nav-link active show">Home</a>
                                <a href="#v-pills-profile" data-toggle="pill" class="nav-link">Profile</a>
                                <a href="#v-pills-messages" data-toggle="pill" class="nav-link">Messages</a>
                                <a href="#v-pills-settings" data-toggle="pill" class="nav-link">Settings</a>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="tab-content">
                                <div id="v-pills-home" class="tab-pane fade active show">
                                    <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis
                                        et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt
                                        minim occaecat.
                                    </p>
                                </div>
                                <div id="v-pills-profile" class="tab-pane fade">
                                    <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum
                                        velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint
                                        minim consectetur qui.
                                    </p>
                                </div>
                                <div id="v-pills-messages" class="tab-pane fade">
                                    <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
                                        et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                </div>
                                <div id="v-pills-settings" class="tab-pane fade">
                                    <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet
                                        qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vertical Nav Pill</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="tab-content">
                                <div id="v-pills-home1" class="tab-pane fade active show">
                                    <p>Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis
                                        et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt
                                        minim occaecat.
                                    </p>
                                </div>
                                <div id="v-pills-profile1" class="tab-pane fade">
                                    <p>Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum
                                        velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint
                                        minim consectetur qui.
                                    </p>
                                </div>
                                <div id="v-pills-messages1" class="tab-pane fade">
                                    <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit
                                        et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                </div>
                                <div id="v-pills-settings1" class="tab-pane fade">
                                    <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet
                                        qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="nav flex-column nav-pills">
                                <a href="#v-pills-home1" data-toggle="pill" class="nav-link active show">Home</a>
                                <a href="#v-pills-profile1" data-toggle="pill" class="nav-link">Profile</a>
                                <a href="#v-pills-messages1" data-toggle="pill" class="nav-link">Messages</a>
                                <a href="#v-pills-settings1" data-toggle="pill" class="nav-link">Settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tab with icon</h4>
                </div>
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home8">
                                <span>
                                    <i class="ti-home"></i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile8">
                                <span>
                                    <i class="ti-user"></i>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#messages8">
                                <span>
                                    <i class="ti-email"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane fade show active" id="home8" role="tabpanel">
                            <div class="pt-4">
                                <h4>This is icon title</h4>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                </p>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile8" role="tabpanel">
                            <div class="pt-4">
                                <h4>This is icon title</h4>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                </p>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="messages8" role="tabpanel">
                            <div class="pt-4">
                                <h4>This is icon title</h4>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                </p>
                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection