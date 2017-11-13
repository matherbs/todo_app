<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Todo_app</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

  </head>

  <body>

    <!-- MAIN START -->
    <div class="main">

      <!-- MAIN-HEADER START -->
      <div class="main-header">
        <h1>MY TODOLIST</h1>
        <svg
        	xmlns="http://www.w3.org/2000/svg"
        	xmlns:xlink="http://www.w3.org/1999/xlink"
        	version="1.1"
        	id="Capa_1"
        	x="0px"
        	y="0px"
        	viewBox="0 0 31.059 31.059"
        	style="enable-background:new 0 0 31.059 31.059;"
        	xml:space="preserve"
        	width="60px"
        	height="60px">
        	<g>
        		<g>
        			<path
        				d="M15.529,31.059C6.966,31.059,0,24.092,0,15.529C0,6.966,6.966,0,15.529,0    c8.563,0,15.529,6.966,15.529,15.529C31.059,24.092,24.092,31.059,15.529,31.059z M15.529,1.774    c-7.585,0-13.755,6.171-13.755,13.755s6.17,13.754,13.755,13.754c7.584,0,13.754-6.17,13.754-13.754S23.113,1.774,15.529,1.774z"
        				fill="#a3a3a3"/>
        		</g>
        		<g>
        			<path d="M21.652,16.416H9.406c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.397-0.888,0.888-0.888h12.246    c0.49,0,0.887,0.398,0.887,0.888C22.539,16.02,22.143,16.416,21.652,16.416z" fill="#a3a3a3"/>
        		</g>
        		<g>
        			<path d="M15.529,22.539c-0.49,0-0.888-0.397-0.888-0.887V9.406c0-0.49,0.398-0.888,0.888-0.888    c0.49,0,0.887,0.398,0.887,0.888v12.246C16.416,22.143,16.02,22.539,15.529,22.539z" fill="#a3a3a3"/>
        		</g>
        	</g>
        </svg>
      </div>
      <!-- MAIN-HEADER END -->

      <!-- MAIN.CONTAINER START -->
      <div class="main-container">
        <ul class="list" id="todo-list">

          <li class="list-item">

            <!-- LI HEADER START -->
            <header class="item-header">
              <h2 class="item-title">My title</h2>
              <ul class="menu">
                <li class="menu-item delete">Edit</li>
                <li class="menu-item edit">Delete</li>
              </ul>
            </header>
            <!-- LI HEADER END -->

            <!-- LI MAIN START -->
            <div class="item-container">
              <p>My description</p>
            </div>
            <!-- LI MAIN END -->

            <!-- LI FOOTER START -->
            <footer class="item-footer">
              <span>Start at...</span>
              <span>End at...</span>
            </footer>
            <hr class="hr-item-footer">
            <!-- LI FOOTER END -->

          </li>
        </ul>

      </div>
      <!-- MAIN.CONTAINER END -->

      <!-- NEXT.CONTAINER START -->
      <div class="next-container">

      </div>
      <!-- NEXT.CONTAINER END -->

      <!-- MAIN-FOOTER START -->
      <div class="main-footer">
        <p id="show"> Show: <span id="all">All task</span> <span id="todo">Todo task</span> <span id="done">Done task</span> </p>
      </div>
      <!-- MAIN-FOOTER END -->

    </div>
    <!-- MAIN END -->

  </body>
</html>
