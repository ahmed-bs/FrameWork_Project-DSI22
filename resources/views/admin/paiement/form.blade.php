@csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="numero_montant">numero montant</label>
                        <input type="text" name="numero_montant" id="numero_montant" value="{{ $paiement->numero_montant ?? old('numero_montant') }}" class="form-control @error('numero_montant') is-invalid @enderror" placeholder="numero montant goes here">
                        @error('numero_montant')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="montant">montant</label>
                        <input type="text" name="montant" id="montant"  value="{{$paiement->montant?? old('montant') }}"class="form-control @error('montant') is-invalid @enderror" placeholder="montant goes here">
                        @error('montant')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
            <div class="row">
              <div class="col">
                    <div class="form-group">
                        <label for="date_paiement">date paiement</label>
                        <input type="text" name="date_paiement" id="prix_commande" value="{{ $paiement->date_paiement ?? old('date_paiement') }}" class="form-control @error('date_paiement') is-invalid @enderror" placeholder="date paiement goes here">
                        @error('date_paiement')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>

                <div class="col">
                    <div class="form-group">
                        <label for="date_expiration">date expiration</label>
                        <input type="text" name="date_expiration" id="date_expiration"  value="{{$paiement->date_expiration?? old('date_expiration') }}"class="form-control @error('date_expiration') is-invalid @enderror" placeholder="date expiration goes here">
                        @error('date_expiration')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="email">email paiement</label>
                        <input type="text" name="email" id="paiement"  value="{{$paiement->email?? old('email') }}"class="form-control @error('email') is-invalid @enderror" placeholder="email goes here">
                        @error('paiement')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button></div>
                <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button></div>
            </div>
