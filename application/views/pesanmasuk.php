<div class="inner-block">

    <div class="inbox">
        <h2>Inbox</h2>
        <div class="col-md-4 compose">   	 	
            <div class="mail-profile">
                <div class="mailer-name"> 			
                    <h5><a href="#"><p> <?php echo $this->session->userdata('username') ?> </p></a></h5>  	 				   
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="compose-bottom">
                <nav class="nav-sidebar">
                    <ul class="nav tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-inbox"></i>Pesan Masuk <div class="clearfix"></div></a></li>
                        <li class=""><a href="#tab5" data-toggle="tab"><i class="fa fa-envelope-o"></i>Profile</a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="col-md-8 mailbox-content  tab-content tab-content-in">
            <div class="tab-pane active text-style" id="tab1">
                <div class="mailbox-border">
                    <div class="mail-toolbar clearfix">
                        <div class="float-left">    

                            <div class="dropdown dropdown-inbox">
                                <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-cog icon_8"></i>
                                    <i class="fa fa-chevron-down icon_8"></i>
                                    <div class="ripple-wrapper"></div></a>
                                <ul class="dropdown-menu float-right">
                                    <li>
                                           <a href="<?php echo base_url().'MyController/pesanMasuk'?>" title="">
                                            <i class="fa fa-refresh"> </i>
                                            Refresh
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" class="font-red" title="">
                                            <i class="fa fa-times" icon_9=""> </i>
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="clearfix"> </div>
                        </div>
                        </a>
                </div>
                <table class="table tab-border">
                    <thead>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $x) { ?>
                        <tr class="unread checked">
                            <td class="hidden-xs"><?= $x['ib_nama'] ?></td>
                            <td><?= $x['ib_pesan'] ?></td>
                            <td><?= $x['ib_time'] ?></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>  
        </div>


        <div class="tab-pane text-style" id="tab5">

            <div class="mailbox-border">
                <div class="mail-toolbar clearfix">

                </div>
                <div class="table-responsive">

                    <table class="table table-hover">

                        <tr>
                            <td>ID Admin</td>
                            <td><?php echo $this->session->userdata('id_admin') ?></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><?php echo $this->session->userdata('username') ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?php echo $this->session->userdata('nama') ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $this->session->userdata('email') ?></td>
                        </tr>
                        <tr>
                        </tr>
                    </table>

                </div>
            </div>   
        </div>
    </div>
    <div class="clearfix"> </div>     
</div>
</div>