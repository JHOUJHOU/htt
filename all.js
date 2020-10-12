// var xhr = new XMLHttpRequest();
// xhr.open('post','https://hexschool-tutorial.herokuapp.com/api/signup',true);
// xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
// xhr.send('email=123@gmail.com&password=12344578');

document.getElementById('login').onclick = function(){
    var stu = document.getElementById('username').value;
    var newstu = stu.substr(1,3);
    var checknewstu = '109'; 
    if(newstu == checknewstu){
        console.log('您是新生');
    }else{
        console.log('此問卷適用於109學年度新生');
    }
}