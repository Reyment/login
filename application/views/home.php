<h2 style="margin-top: 0;">
    <small>Selamat datang</small>
    <br />
    <?php echo $this->session->userdata('nama') ?>
</h2>
<hr />

<div class="form-group">
    <label>Role</label>
    <br /><?php echo ucwords($this->session->userdata('role')) ?>
</div>

<?php
// Cek role user
if($this->session->userdata('role') == 'admin'){ // Jika role-nya admin
    ?>

    <?php
}else{ // Jika role-nya operator
    ?>

    <?php
}
?>
