<div class="main-container">
    <div class="xs-pd-20-10 pd-ltr-20">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix mb-20">
                <div class="pull-left">
                    <h4 class="text-blue h4">Form User</h4>
                </div>
            </div>
            <?php
            $user_id = '';
            $user_username = '';
            $user_password = '';
            $user_email = '';


            if (isset($user)) {
                $user_username = $user->user_username;
                $user_password = $user->user_password;
                $user_email = $user->user_email;
            }
            ?>

            <?= $this->session->flashdata('error'); ?>

            <form action="<?= site_url('C_Users/add') ?>" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username:</label>
                    <input type="text" name="user_username" value="<?= $user_username ?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password:</label>
                    <input type="text" name="user_password" value="<?= $user_password ?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                    <input type="email" name="user_email" value="<?= $user_email ?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Usertype:</label>
                    <select name="user_type" class="form-control" required>
                        <option value="">Pilih Usertype</option>
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Save User" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>