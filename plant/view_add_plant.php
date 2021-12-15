<div class="modal fade" id="add_plant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add New plant</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="plant/add_plant.php" method="post">
        <div class="modal-body">

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              <label for="floatingInput">Name</label>
            </div>

            <div class="form-floating mb-3">
              <select class="form-select" id="type_id" name="type_id" aria-label="Floating label select example">
                <option selected>None</option>
                <option value="climbers">climbers</option>
                <option value="creepers">creepers</option>
                <option value="herbs">herbs</option>
                <option value="shrubs">shrubs</option>
                <option value="trees">trees</option>
              </select>
              <label for="floatingSelect">type</label>
            </div>


            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="color" name="color" placeholder="color">
              <label for="floatingInput">color</label>
            </div>

            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="price_range" name="price_range" placeholder="price_range">
              <label for="floatingInput">Price</label>
            </div>

            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="remarks" name="remarks" placeholder="remarks">
              <label for="floatingInput">remarks</label>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>