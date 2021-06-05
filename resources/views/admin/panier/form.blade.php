@csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nbrArticle">nbrArticle</label>
                        <input type="text" name="nbrArticle" id="nbrArticle" value="{{ $produit->nbrArticle ?? old('nbrArticle') }}" class="form-control @error('nbrArticle') is-invalid @enderror "placeholder="nbrArticle goes here">
                        @error('nbrArticle')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="totalPrix">totalPrix</label>
                        <input type="text" name="totalPrix" id="totalPrix"  value="{{$produit->totalPrix ?? old('totalPrix') }}"class="form-control @error('totalPrix') is-invalid @enderror" placeholder="totalPrix-url goes here">
                        @error('totalPrix')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
           
           
            <div class="row">
                <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button></div>
                <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button></div>
            </div>
