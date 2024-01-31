<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 09:47:23 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Lockscreen</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../../dist/css/adminlte.min2167.css?v=3.2.0">
<script nonce="3f403910-9b23-481c-b1ce-539d029f2990">(function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="../../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition lockscreen">

<div class="lockscreen-wrapper">
<div class="lockscreen-logo">
<a href="../../index2.html"><b>Admin</b>LTE</a>
</div>

<div class="lockscreen-name">John Doe</div>

<div class="lockscreen-item">

<div class="lockscreen-image">
<img src="../../dist/img/user1-128x128.jpg" alt="User Image">
</div>


<form class="lockscreen-credentials">
<div class="input-group">
<input type="password" class="form-control" placeholder="password">
<div class="input-group-append">
<button type="button" class="btn">
<i class="fas fa-arrow-right text-muted"></i>
</button>
</div>
</div>
</form>

</div>

<div class="help-block text-center">
Enter your password to retrieve your session
</div>
<div class="text-center">
<a href="login.html">Or sign in as a different user</a>
</div>
<div class="lockscreen-footer text-center">
Copyright &copy; 2014-2021 <b><a href="https://adminlte.io/" class="text-black">AdminLTE.io</a></b><br>
All rights reserved
</div>
</div>


<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/examples/lockscreen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jan 2024 09:47:23 GMT -->
</html>
