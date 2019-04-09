
<div class="modalwin">
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
  
      <div id="app" class="col-md-4">
    <label>Логин</label>
    <input type="text" v-model="login" placeholder="Введите логин" class="form-control" /><br>
    <label>Пароль</label>
    <input type="password" v-model="password" placeholder="Введите пароль" class="form-control" /><br>
     <div>
        <h3>Введенная информация</h3>
        <p>Логин: {{login}}</p>
        <p>Пароль: {{password}}</p>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

</div>