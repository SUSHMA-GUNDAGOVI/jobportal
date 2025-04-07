<div class="top-bar-list">
    <!-- .top-bar-item -->
    <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
        <!-- toggle menu -->
        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
    </div><!-- /.top-bar-item -->
    <!-- .top-bar-item -->
    <div class="top-bar-item top-bar-item-full">
        <!-- .top-bar-search -->
        <form class="top-bar-search">
            <!-- .input-group -->
            <div class="">
                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-xl ml-n4 mw-100">
                    <div class="dropdown-arrow ml-3"></div><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar h-auto" style="max-height: 360px">
                        <!-- .list-group -->
                        <div class="list-group list-group-flush list-group-reflow mb-2">
                            <h6 class="list-group-header d-flex justify-content-between">
                                <span>Shortcut</span>
                            </h6><!-- .list-group-item -->
                            <div class="list-group-item py-2">
                                <a href="#" class="stretched-link"></a>
                                <div class="tile tile-sm bg-muted">
                                    <i class="fas fa-user-plus"></i>
                                </div>
                                <div class="ml-2"> Create user </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item py-2">
                                <a href="#" class="stretched-link"></a>
                                <div class="tile tile-sm bg-muted">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <div class="ml-2"> Create invoice </div>
                            </div><!-- /.list-group-item -->
                            <h6 class="list-group-header d-flex justify-content-between mt-2">
                                <span>In projects</span> <a href="#" class="font-weight-normal">Show more</a>
                            </h6><!-- .list-group-item -->
                            <div class="list-group-item py-2">
                                <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                                <div class="user-avatar user-avatar-sm bg-muted">
                                    <img src="assets/images/avatars/bootstrap.svg" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="mb-n1"> Bootstrap </div><small class="text-muted">Just now</small>
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- .list-group-item -->
                            <div class="list-group-item py-2">
                                <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                                <div class="user-avatar user-avatar-sm bg-muted">
                                    <img src="assets/images/avatars/slack.svg" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="mb-n1"> Slack </div><small class="text-muted">Updated 25 minutes ago</small>
                                </div>
                            </div><!-- /.list-group-item -->
                            <!-- /.list-group-item -->
                            <h6 class="list-group-header d-flex justify-content-between mt-2">
                                <span>Another section</span> <a href="#" class="font-weight-normal">Show more</a>
                            </h6><!-- .list-group-item -->
                            <div class="list-group-item py-2">
                                <a href="#" class="stretched-link"><span class="sr-only">Go to search result</span></a>
                                <div class="tile tile-sm bg-muted"> P </div>
                                <div class="ml-2">
                                    <div class="mb-n1"> Product name </div>
                                </div>
                            </div><!-- /.list-group-item -->
                        </div><!-- /.list-group -->
                    </div><!-- /.dropdown-scroll -->
                    <a href="#" class="dropdown-footer">Show all results</a>
                </div><!-- /.dropdown-menu -->
            </div><!-- /.input-group -->
        </form><!-- /.top-bar-search -->
    </div><!-- /.top-bar-item -->




    <?php if (isset($_SESSION['login_id'])): ?>

    <?php endif; ?>


    <!-- .top-bar-item -->
    <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
        <!-- .nav -->
        <ul class="header-nav nav">
            <!-- .nav-item -->
            
            <!-- .nav-item -->
            <!-- .nav-item -->
           
        </ul><!-- /.nav -->



        <!-- .btn-account -->
        <div class="dropdown d-none d-md-flex">
            <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="assets/images/avatars/profile.png" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">User</span> <span class="account-description"><?php echo $_SESSION['login_name'] ?></span></span></button> <!-- .dropdown-menu -->
            <div class="dropdown-menu">
                <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                <h6 class="dropdown-header d-none d-md-block d-lg-none"> Beni Arisandi </h6> <a class="dropdown-item" href="ajax.php?action=logout"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>

            </div><!-- /.dropdown-menu -->
        </div><!-- /.btn-account -->
    </div><!-- /.top-bar-item -->
</div><!-- /.top-bar-list -->

<!-- Script to Handle Mark Notifications as Read -->
<script>
    $(document).on('click', '.nav-link[data-toggle="dropdown"]', function() {
        $.post('mark_notifications_read.php', {
            user_id: <?php echo $user_id; ?>
        }, function() {
            $('#notification-count').text(0);
        });
    });
</script>

<script>
    $('#manage_account').click(function() {
        uni_modal('Manage Account', 'manage_user.php?id=<?php echo $_SESSION['login_id'] ?>')
    })
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">