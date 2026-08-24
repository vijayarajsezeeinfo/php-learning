<form>
  <div>
    <label>Usercode</label>
    <input type="text" id="userCode" name="userCode">
  </div>
  <div>
    <label>Username</label>
    <input type="text" id="username" name="username">
  </div>
  <div>
    <label>Password</label>
    <input type="password" id="password" name="password">
  </div>
  <div>
    <label>Namespace code</label>
    <input type="text" id="namespaceCode" name="namespaceCode">
  </div>
  <button type="button" id="btn-login" onClick="loginAction()">Login</button>
</form>

<div id="login-message"></div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
  $(function() {});

  function loginAction() {
    var data = {};

    data.userCode = $.trim($("#userCode").val());
    data.username = $.trim($("#username").val());
    data.password = $.trim($("#password").val());
    data.namespaceCode = $.trim($("#namespaceCode").val());

    $("#login-message").hide();

    if (data.userCode == "") {
      $("#login-message").html("Please enter usercode");
      $("#login-message").show();
      $("#userCode").focus();
      return false;
    } else if (data.username == "") {
      $("#login-message").html("Please enter username");
      $("#login-message").show();
      $("#username").focus();
      return false;
    } else if (data.password == "") {
      $("#login-message").html("Please enter password");
      $("#login-message").show();
      $("#password").focus();
      return false;
    } else if (data.namespaceCode == "") {
      $("#login-message").html("Please enter namespace code");
      $("#login-message").show();
      $("#namespaceCode").focus();
      return false;
    }
    $('#btn-login').addClass('disabled');

    $.ajax({
      type: "POST",
      url: "/login",
      data: data,
      dataType: "json",

      success: function(res) {
        var authToken = res.response;
        $('#login-message').html(authToken);
        $('#login-message').show();
      },

      error: function(xhr) {
        $('#login-message').html(xhr.responseText);
        $('#login-message').show();

      }
    });
  }
</script>