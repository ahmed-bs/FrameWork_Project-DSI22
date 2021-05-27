@csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="date_livraison">date_livraison</label>
                        <input type="text" name="date_livraison" id="date_livraison" value="{{ $livraison->date_livraison ?? old('date_livraison') }}" class="form-control @error('date_livraison') is-invalid @enderror "placeholder="date_livraison goes here">
                        @error('date_livraison')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" name="description" id="description"  value="{{$livraison->description ?? old('description') }}"class="form-control @error('description') is-invalid @enderror" placeholder="description goes here">
                        @error('description')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                      </div>
                    
              
            </div>
         
            <div class="row">
                <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button></div>
                <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button></div>
            </div>
