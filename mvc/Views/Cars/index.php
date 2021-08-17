<h1>Cars</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/cars/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new car</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Colour</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
            foreach ($cars as $car)
            {
                echo '<tr>';
                echo "<td>" . $car->getId() . "</td>";
                echo "<td>" . $car->getName() . "</td>";
                echo "<td>" . $car->getColour() . "</td>";
                echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/cars/edit/" . $car->getId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/cars/delete/" . $car->getId() . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove' ></span> Del</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</div>