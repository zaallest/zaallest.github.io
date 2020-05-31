<?php require_once('../../php_logic/connector.php'); ?>

<?php include('../php/lecturer_header.php');?>

<?php include('../php/lecturer_sidenav.php');?>


            <section class="Main">

                <div class="main-nav">
                    <ul>

                        <li><a href="AddStudent.php" class="button">Add Students</a></li>
                        <li><a href="View_Classes.php" class="button">View Classes</a></li>
                    </ul>
                </div><br><br><br><br>

                <h2 class="t-aline">List of Classes and Registered Students </h2>
                <hr><br><br><br><br>

                <table>
                     
                <tr>
                        <th>#</th>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Semester</th>
                        <th>Academic Year</th>
                        <th>Registered#</th>
                        <th>View Students</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Intro TO CS</td>
                        <td>CPS122</td>
                        <td>First</td>
                        <td>2020/2021</td>
                        <td>40</td>
                        <td>
                            <div class="icon-col">
                            <a href="ViewStudent.php"> <span><i class="fa fa-users"></i></span></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Intro TO CS</td>
                        <td>CPS122</td>
                        <td>First</td>
                        <td>2020/2021</td>
                        <td>40</td>
                        <td>
                            <div class="icon-col">
                            <a href="ViewStudent.php"> <span><i class="fa fa-users"></i></span></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Intro TO CS</td>
                        <td>CPS122</td>
                        <td>First</td>
                        <td>2020/2021</td>
                        <td>40</td>
                        <td>
                            <div class="icon-col">
                            <a href="ViewStudent.php"> <span><i class="fa fa-users"></i></span></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Intro TO CS</td>
                        <td>CPS122</td>
                        <td>First</td>
                        <td>2020/2021</td>
                        <td>40</td>
                        <td>
                            <div class="icon-col">
                            <a href="ViewStudent.php"> <span><i class="fa fa-users"></i></span></a>
                            </div>
                        </td>
                    </tr>

                </table><br><br><br><br>

            </section>
        </div>

<?php include('../php/footer.php');?>
