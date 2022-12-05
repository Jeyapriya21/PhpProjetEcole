<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
     

      <!-- search form (Optional) -->
     
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"> Dashboard</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>-->
        <li id="stat"><a href="./"><i class="fa fa-bar-chart-o"></i> <span>Statistiques</span> </a></li>

        <?php if($_SESSION['role']=='Director'){ ?>
        <li id="new"><a href="./student.php"><i class="fa fa-users"></i> <span>Eléves</span> </a></li>
        <li id="teacher"><a href="./teacher.php"><i class="fa  fa-black-tie"></i> <span>Enseignants</span> </a></li>
        <li id="director"><a href="./director.php"><i class="fa  fa-female"></i> <span>Directeurs</span> </a></li>
        <li id="subject"><a href="./subject.php"><i class="fa fa-book"></i> <span>Matières</span> </a></li>
        <li id="class"><a href="./class.php"><i class="fa fa-bank"></i> <span>Classes</span> </a></li>
        <li id="classInfo"><a href="./classInfo.php"><i class="fa fa-list"></i> <span> Détails Classe </span> </a></li>
        <li id="schedule"><a href="./schedule.php"><i class="fa fa-calendar-o"></i> <span>Programme</span> </a></li>
        <li id="attendance"><a href="./attendance.php"><i class="fa  fa-check"></i> <span>Présence</span> </a></li>
        <li id="user"><a href="./user.php"><i class="fa fa-user-plus"></i> <span>Utilisateurs</span> </a></li>
      <?php }elseif ($_SESSION['role']=='Teacher') {
          ?>
      <li id="student-par"><a href="./student-par.php"><i class="fa fa-users"></i> <span>Eléves</span> </a></li>
      <li id="classInfo"><a href="./classInfo.php"><i class="fa fa-list"></i> <span>Détails Classe</span> </a></li>
          <?php

      }elseif ($_SESSION['role']=='Student') { ?>
      <li id="classInfo"><a href="./classInfo.php"><i class="fa fa-list"></i> <span>Détails Classe</span> </a></li>
      <li id="schedule-stu"><a href="./schedule-stu.php"><i class="fa fa-calendar-o"></i> <span>Programme</span> </a></li>

<?php

      }?>
      


      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>