<div class="main-content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Patient</h6>
                                <h2>{{ App\User::where('role_id',3)->count() }}</h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-users"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block"></small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Doctors</h6>
                                <h2>{{ App\User::where('role_id',1)->count() }}</h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-user-plus"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block"></small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Role</h6>
                                <h2>{{ App\User::count() }}</h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-user-check"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block"></small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Bookings</h6>
                                <h2>{{ App\Booking::count() }}</h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-message-square"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block"></small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="widget">
                    <div class="widget-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="state">
                                <h6>Prescriptions</h6>
                                <h2>{{ App\Prescription::count() }}</h2>
                            </div>
                            <div class="icon">
                                <i class="ik ik-align-justify"></i>
                            </div>
                        </div>
                        <small class="text-small mt-10 d-block"></small>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<aside class="right-sidebar">
    <div class="sidebar-chat" data-plugin="chat-sidebar">
        <div class="sidebar-chat-info">
            <h6>Chat List</h6>
            <form class="mr-t-10">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search for friends ...">
                    <i class="ik ik-search"></i>
                </div>
            </form>
        </div>
        <div class="chat-list">
            <div class="list-group row">
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                    <figure class="user--online">
                        <img src="{{ asset('template/img/users/1.jpg')}}" class="rounded-circle" alt="">
                    </figure><span><span class="name">Gene Newman</span>  <span class="username">@gene_newman</span> </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                    <figure class="user--online">
                        <img src="{{ asset('template/img/users/2.jpg')}}" class="rounded-circle" alt="">
                    </figure><span><span class="name">Billy Black</span>  <span class="username">@billyblack</span> </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                    <figure class="user--online">
                        <img src="{{ asset('template/img/users/3.jpg')}}" class="rounded-circle" alt="">
                    </figure><span><span class="name">Herbert Diaz</span>  <span class="username">@herbert</span> </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                    <figure class="user--busy">
                        <img src="{{ asset('template/img/users/4.jpg')}}" class="rounded-circle" alt="">
                    </figure><span><span class="name">Sylvia Harvey</span>  <span class="username">@sylvia</span> </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                    <figure class="user--busy">
                        <img src="{{ asset('template/img/users/5.jpg')}}" class="rounded-circle" alt="">
                    </figure><span><span class="name">Marsha Hoffman</span>  <span class="username">@m_hoffman</span> </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                    <figure class="user--offline">
                        <img src="{{ asset('template/img/users/1.jpg')}}" class="rounded-circle" alt="">
                    </figure><span><span class="name">Mason Grant</span>  <span class="username">@masongrant</span> </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                    <figure class="user--offline">
                        <img src="{{ asset('template/img/users/2.jpg')}}" class="rounded-circle" alt="">
                    </figure><span><span class="name">Shelly Sullivan</span>  <span class="username">@shelly</span></span>
                </a>
            </div>
        </div>
    </div>
</aside>

<div class="chat-panel" hidden>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
            <span class="user-name">John Doe</span>
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="card-body">
            <div class="widget-chat-activity flex-1">
                <div class="messages">
                    <div class="message media reply">
                        <figure class="user--online">
                            <a href="#">
                                <img src="{{ asset('template/img/users/3.jpg')}}" class="rounded-circle" alt="">
                            </a>
                        </figure>
                        <div class="message-body media-body">
                            <p>Epic Cheeseburgers come in all kind of styles.</p>
                        </div>
                    </div>
                    <div class="message media">
                        <figure class="user--online">
                            <a href="#">
                                <img src="{{ asset('template/img/users/1.jpg')}}" class="rounded-circle" alt="">
                            </a>
                        </figure>
                        <div class="message-body media-body">
                            <p>Cheeseburgers make your knees weak.</p>
                        </div>
                    </div>
                    <div class="message media reply">
                        <figure class="user--offline">
                            <a href="#">
                                <img src="{{ asset('template/img/users/5.jpg')}}" class="rounded-circle" alt="">
                            </a>
                        </figure>
                        <div class="message-body media-body">
                            <p>Cheeseburgers will never let you down.</p>
                            <p>They'll also never run around or desert you.</p>
                        </div>
                    </div>
                    <div class="message media">
                        <figure class="user--online">
                            <a href="#">
                                <img src="{{ asset('template/img/users/1.jpg')}}" class="rounded-circle" alt="">
                            </a>
                        </figure>
                        <div class="message-body media-body">
                            <p>A great cheeseburger is a gastronomical event.</p>
                        </div>
                    </div>
                    <div class="message media reply">
                        <figure class="user--busy">
                            <a href="#">
                                <img src="{{ asset('template/img/users/5.jpg')}}" class="rounded-circle" alt="">
                            </a>
                        </figure>
                        <div class="message-body media-body">
                            <p>There's a cheesy incarnation waiting for you no matter what you palete preferences are.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
