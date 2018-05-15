<nav class="navbar is-fixed-top is-transparent" role="navigation" aria-label="main navigation">
<div class = "container">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            <img src={{ url('https://secure.actblue.com/x/object/actblue-images/brandings/header_images/10142/large.png?1500993628')}} alt="Mal">
        </a>
        <span class="navbar-burger burger" data-target="navMenu">
          <span></span>
          <span></span>
           <span></span>
         </span>
    </div>
    <div id="navMenu" class="navbar-menu">
        <div class ="navbar-end">
            <a class ="navbar-item" href="/">Home</a>
            <a class ="navbar-item" href="/about">About</a>
            <a class ="navbar-item " href="/platform">Issues</a>
            <a class ="navbar-item " href="/join-us">Join Us</a>
            <a class ="navbar-item"  href="/blogs">Social Room</a>
        </div>
    </div>
</div>
</nav>
<script type="text/javascript">
    (function() {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#'+burger.dataset.target);
        burger.addEventListener('click', function(){
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
        });
    })();
</script>
