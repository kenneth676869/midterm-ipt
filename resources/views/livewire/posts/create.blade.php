<div>
    <div id="create-post-box" class="card">
        <div class="card-header">
            <h3 class="text-center text-white">Create Post</h3>
        </div>
        <div class="card-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" wire:model.defer="title">
                <label for="title">Title</label>
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-3">
              <select name="category" class="form-select" id="" wire:model.defer="category">
                <option value="" hidden="true">Select Category</option>
                <option value="" selected disabled>Select Category</option>
                <option value="Category1">Category1</option>
                <option value="Category2">Category2</option>
                <option value="Category3">Category3</option>
                <option value="Category4">Category4</option>
              </select>
              <label for="category">Category</label>
                @error('category')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input id="content-input" type="text" class="form-control" wire:model.defer="content">
                <label for="content">Content</label>
                @error('content')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn" type="submit" wire:click="createPost()">Post</button>
            </div>
        </div>
    </div>
    <style scoped>
        #create-post-box{
            background-color:  	brown;
            color: #1A1B41;
        }
        .mt-4{
        border:  white 2px solid;
    }
        .card-header{
            background-color:  	yellow;
            color: #ffa31a;
        }
        a{
            color: #BAFF29;
            margin-right: 8px;
        }
        .btn{
            background-color: #292929;
            color: #ffa31a;
        }
       
        .btn:hover {
            background-color: blue;
        }
        .card{
            width: 500px;
        }
    
    </style>
</div>