<h1>Edit car</h1>
    <form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="id" hidden value ="<?php 
                if ($car->getId() !== null) {
                    echo($car->getId());
                }
            ?>">
        <input type="text" class="form-control" id="name" placeholder="Enter a title" name="name" value ="<?php 
                if ($car->getName() !== null) {
                    echo($car->getName());
                }
            ?>">
    </div>

    <div class="form-group">
        <label for="colour">Colour</label>
        <input type="text" class="form-control" id="colour" placeholder="Enter a description" name="colour" value ="<?php
                if ($car->getColour() !== null) {
                        echo($car->getColour());
                }
            ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
