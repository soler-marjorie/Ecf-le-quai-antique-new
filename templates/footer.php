<?php 
use App\Db\Mysql; 
//on se connecte à la bdd
$mysql = Mysql::getInstance();
$pdo = $mysql->getPDO();

$query = $pdo->prepare("SELECT * FROM schedules");

$query->execute();

$schedules = $query->fetchAll();
?>
    </main>
    
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-3 mb-0">© 2023 Le quai antique</p>

        <!--Horaires d'ouvertures-->
        <section class="ouverture col-md-3">
            <h2>Nos </br> horaires d'ouvertures</h2>

            <div class="horaires">
                <?php foreach ($schedules as $schedule) {?>
                    <div class="container">
                        <div>
                            <h3><?php echo $schedule['jours']; ?></h3>
                        </div>
                    
            
                        <div class="heures">
                            <p><?php echo $schedule['horairesMatin']; ?></p>
                            <p><?php echo $schedule['horairesAprem']; ?></p>
                        </div>
                    </div>
                      
                
                <?php } ?>
            </div>
        </section>

        <ul class="nav col-md-3 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">La carte</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
        </ul>

        <a href="/" class="col-md-3 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <img src="assets/img/logo2.png" alt="logo" width="200rem">
        </a>

        
        
    </footer>

<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>