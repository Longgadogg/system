<?php include("sidebar.php"); ?>
<style>
    :root {
  --surface-color: #fff;
  --curve: 40;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;

  
  
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;
}

.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 2em;
  padding: 2em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;
}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 1em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: #D7BDCA;
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}    
</style>
<body >
  


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
      <img src="pics/evsulogo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      COE Departments and Heads
    </a>
  </div>
</nav>

<ul class="cards">
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="pics/boy.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Engr. Ramon I. Lim</h3>            
            <span class="card__status">Dean of the College of Engineering</span>
          </div>
        </div>
        <p class="card__description">Associate Professor V</p>
      </div>
    </a>      
  </li>
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="pics/boy.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Dr. Diosdado J. Lesiguez</h3>
            <span class="card__status">Head of Civil Engineering Department</span>
          </div>
        </div>
        <p class="card__description">Assistant Professor IV</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
          <img class="card__thumb" src="pics/boy.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Dr. Jessie R. Paragas</h3>           
            <span class="card__status">Head of the Information Technology Department</span>
          </div>
        </div>
        <p class="card__description">Assistant Professor I</p>
      </div>
    </a>
  </li>
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="pics/girl.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Engr. Asuncion Raquel T. Casio</h3>
            <span class="card__status">Head of the Chemical Engineering Department</span>
          </div>          
        </div>
        <p class="card__description">Assistant Professor IV</p>
      </div>
    </a>
  </li>    
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="pics/boy.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Engr. Vinyl H. Aquino</h3>
            <span class="card__status">Head of the Electrical Engineering Department</span>
          </div>          
        </div>
        <p class="card__description">Assistant Professor I</p>
      </div>
    </a>
  </li>  
    
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="pics/boy.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Dr. Gabino C. Hilvano</h3>
            <span class="card__status">Head of the Geodetic Engineering Department</span>
          </div>          
        </div>
        <p class="card__description">Assistant Professor III</p>
      </div>
    </a>
  </li>  
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="pics/boy.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Engr. Roque A. Costiniano</h3>
            <span class="card__status">Head of the Industrial Engineering Department and concurrent Head for Quality Management System</span>
          </div>          
        </div>
        <p class="card__description">Instructor I</p>
      </div>
    </a>
  </li>  
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="pics/boy.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Engr. Oscar G. Cabaluna</h3>
            <span class="card__status">Head of the Mechanical Engineering Department</span>
          </div>          
        </div>
        <p class="card__description">Associate Professor II</p>
      </div>
    </a>
  </li>  
  <li>
    <a href="" class="card">
      <img src="pics/mainlogo.png" class="card__image" alt="" />
      <div class="card__overlay">
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="pics/Girl.jpg" alt="" />
          <div class="card__header-text">
            <h3 class="card__title">Engr. Lalaine Jean A. Ballais</h3>
            <span class="card__status">Head of the Electrical Engineering Department</span>
          </div>          
        </div>
        <p class="card__description">Instructor I</p>
      </div>
    </a>
  </li>  
</ul>

</body>