
<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <div class="admins form">
                <?= $this->Flash->render('auth') ?>
                <?=$this->Form->create() ?>
                <h1>Admin Login</h1>
                <?=$this->Form->control('email', ['label' => false, 'class' => 'form-control']) ?>
                <?=$this->Form->control('password',['label' => false, 'class' => 'form-control']) ?>
                <?=$this->Form->button(__('Login'),[ 'class' => 'btn btn-default submit btn-success']); ?>
                <?=$this->Form->end() ?>
                <div class="clearfix"></div>
                <br />
            </div>

        </section>
    </div>


</div>
</div>
</body>