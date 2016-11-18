<div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">SIAKAD</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
                <ul class="nav navbar-nav navbar-right"> 
                    <?php 
                    if (!isset($_SESSION["login"])) {
                      ?>
                <li><a href="register.php">Daftar<span class="navbar-unread">1</span></a></li>
                  <?php }?>         
                </ul>
                    
                  <?php 
            if (isset($_SESSION["login"])) {
             ?>
                
                <ul class="nav navbar-nav navbar-left">
                <li><a href="#fakelink">Menu Utama<span class="navbar-unread">1</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kuliah <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Isi Krs</a></li>
                    <li><a href="#">Grafik IP</a></li>
                    <li><a href="#">Nilai Akhir</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Pembyaran</a></li>
                  </ul>
                   <li><a href="#fakelink">Our University</a></li>
                    <?php }?>
            </div> 
          </nav> 
        </div>

<!--<div class="col-xs-12">
          <nav class="navbar navbar-inverse navbar-embossed" role="navigation">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <a class="navbar-brand" href="#">SIAKAD</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-01">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="#fakelink">Menu Utama<span class="navbar-unread">1</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kuliah <b class="caret"></b></a>
                  <span class="dropdown-arrow"></span>
                  <ul class="dropdown-menu">
                    <li><a href="#">Isi Krs</a></li>
                    <li><a href="#">Grafik IP</a></li>
                    <li><a href="#">Nilai Akhir</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Pembyaran</a></li>
                  </ul>
                </li>
                <li><a href="#fakelink">Our University</a></li>
               </ul>
               <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                  <div class="input-group">
                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Search">
                    <span class="input-group-btn">
                      <button type="submit" class="btn"><span class="fui-search"></span></button>
                    </span>
                  </div>
                </div>
              </form>
            </div> /.navbar-collapse 
          </nav> /navbar 
        </div>
-->

