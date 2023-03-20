<div>
    <div class="row p-4 pt-6 ">
        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x mr-3"></i>Formulaire d'ajouter un nouvel utilisateur</h3>
            </div>

            <form role="form" wire:submit.prevent="addUser()">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" placeholder="Nom"
                                wire:model="newUser.nom">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Prenom</label>
                                <input type="text" class="form-control" placeholder="Prenom"
                                wire:model="newUser.prenom">
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label>Sexe</label>
                        <select class="form-control" 
                        wire:model="newUser.sexe">
                            <option value="">---</option>
                            <option value="M">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Adresse e-mail</label>
                        <input type="email" class="form-control" placeholder="Enter email"
                        wire:model="newUser.email">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Téléphone</label>
                                <input type="text" class="form-control" placeholder="telephone 1"
                                wire:model="newUser.telephone1">
                        
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Téléphone 2 </label>
                                <input type="text" class="form-control" placeholder="Téléphone 2"
                                wire:model="newUser.telephone2">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control"  placeholder="Password"
                        wire:model="newUser.password">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div> 
            </form>
        </div>
    </div>
</div>
{{--<script>
    //window.addEventListener('showSuccessMessage',event=>{
    //    Swal.fire({
    //        postion: 'top-end',
    //        icon: 'success',
    //        toast: true,
    //        title: 'Opération effectuée avec succè!',
    //        showConfirmButton: false,
    //        timer: 3000
    //    })
    //})
</script>--}}