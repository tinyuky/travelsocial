function signup(){
  $('#signuplink').text("");
  document.getElementById('container').style.height = '500px';
  $('#container').append("<form><input type='email' name='email' placeholder='E-mail'><input type='password' name='pass' placeholder='Password'><input type='password' name='pass' placeholder='Confirm Password'><a type='submit' href=''#''>Sign up</a></form>");
};
