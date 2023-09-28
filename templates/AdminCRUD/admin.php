<?php 
    @session_start();

    use App\Db\Mysql;

    require_once _ROOTPATH_.'\templates\header.php'; 

    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM home');
    $query->execute();
    $pictures = $query->fetchAll($pdo::FETCH_ASSOC);

	$query = $pdo->prepare('SELECT * FROM menu');
    $query->execute();
    $menus = $query->fetchAll($pdo::FETCH_ASSOC);

	$query = $pdo->prepare('SELECT * FROM schedules');
    $query->execute();
    $schedules = $query->fetchAll($pdo::FETCH_ASSOC);
	
	$query = $pdo->prepare('SELECT * FROM booking ORDER BY date');
    $query->execute();
    $bookings = $query->fetchAll($pdo::FETCH_ASSOC);

?>


<div class="container" id="CRUD">
    <h2>Espace administrateur - Le Quai Antique</h2>

    <section class="row" id="galerie">
		<h3>Accueil</h3>
		<table class="col-12">
			<thead>
				<tr>
					<td>
						<h4>Galerie d'images</h4>
					</td>
					<td class="add">
						<a href="./index.php?controller=crud&action=add&id=1" class="btn btn-success" value="addGalerie" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Ajouter une image</span></a>
					</td>
				</tr>
				
				<tr>
					<th class="col-6">Title</th>
					<th class="col-6">Src</th>
					<th class="editSupp">Editer/Supprimer</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($pictures as $home){ ?>
					<tr>	
						<td><?= $home['title'] ;?></td>
						<td><?= $home['src'] ;?></td>
						<td class="btn">
							<a href="editGalerie" class="edit btn btn-warning" data-toggle="modal"><i class="bi bi-pen" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="deleteGalerie" class="delete btn btn-danger" data-toggle="modal"><i class="bi bi-x-circle" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
    </section>

    <section class="row" id="menu">

		<h3>La carte et ses menus</h3>

		<?php foreach ($menus as $menu) {?>
		<h4><?php echo $menu['formule']; ?></h4>
		

			<table class="col-12">	
				<thead>
					<tr>
						<td class="col-sm-6">
							<h5><?php echo $menu['plat']; ?></h5>
						</td>

						<td class="col-sm-6 add">
							<?php if($menu['plat']){ ?>
								<a href="addMenu" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Ajouter un plat</span></a>
							<?php } ?>
						</td>
					</tr>
					

					<?php if($menu['plat']){ ?>
						<tr>
							<th class="col-3">Title</th>
							<th class="col-3">Description</th>
							<th class="col-3">price</th>
							<th class="col-3 editSupp">Editer/Supprimer</th>
						</tr>
					<?php } ?>
				</thead>			

				<tbody>
					
					<tr>						
						<td><?php echo $menu['title']; ?></td>
						<td><?php echo $menu['description']; ?></td>
						<td><?php echo $menu['price']; ?>€</td>
						<td class="btn editSupp">
							<a href="editMenu" class="edit btn btn-warning" data-toggle="modal"><i class="bi bi-pen" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="deleteMenu" class="delete btn btn-danger" data-toggle="modal"><i class="bi bi-x-circle" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		<?php } ?>	
    </section>

    <section class="row" id="horaires">
		<h3>Les horaires du restaurant</h3>
		
		<?php foreach ($schedules as $schedules) {?>
			<div class="col-sm-6">
				<h4><?php echo $schedules['jours']; ?></h4>
			</div>
		
			<table class="col-12">
				<thead>
					<tr>
						<th class="col-sm-6">Matin</th>
						<th class="col-sm-6">Soir</th>
						<th class="col-3 editSupp">Editer</th>
					</tr>
				</thead>
				<tbody>
					<tr>	
						<td><?php echo $schedules['horairesMatin'] ;?></td>
						<td><?php echo $schedules['horairesAprem'] ;?></td>
						<td>
							<a href="editHoraires" class="edit btn btn-warning" data-toggle="modal"><i class="bi bi-pen" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		<?php } ?>
    </section>

    <section class="row" id="booking">
		<table>
			<thead>
				<tr class="col-12">
					<td class="col-6">
						<h3>Les réservations</h3>
					</td>
					<td class="col-6 add">
						<a href="addBook" class="btn btn-success" data-toggle="modal"><i class="bi bi-plus-circle"></i> <span>Ajouter une réservation</span></a>					
					</td>
				</tr>

				<tr>
					<th class="col-sm-2">Date</th>
					<th class="col-sm-2">heure</th>
					<th class="col-sm-2">Nom</th>
					<th class="col-sm-2">Prénom</th>
					<th class="col-sm-2">Nombre de personne</th>
					<th class="col-sm-2">allergies</th>
					<th class="editSupp">Editer/Supprimer</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($bookings as $booking){ ?>
					<tr>	
						<td><?= $booking['date'] ;?></td>
						<td><?= $booking['schedules'] ;?></td>
						<td><?= $booking['name'] ;?></td>
						<td><?= $booking['surname'] ;?></td>
						<td><?= $booking['nbrPeople'] ;?></td>
						<td><?= $booking['allergies'] ;?></td>
						<td>
							<a href="editBook" class="edit btn btn-warning" data-toggle="modal"><i class="bi bi-pen" data-toggle="tooltip" title="" data-original-title="Edit"></i></a>
							<a href="deleteBook" class="delete btn btn-danger" data-toggle="modal"><i class="bi bi-x-circle" data-toggle="tooltip" title="" data-original-title="Delete"></i></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
    </section>
</div>


<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>