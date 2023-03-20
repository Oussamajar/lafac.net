<div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Starter Page</h1>
                    </div>
                    <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="breadcrumb-item active">Habilitations / Utilisateurs</li>
                            </ol>
                    </div>
                </div>
            </div>
        </div>
@if ($showListUser)
    @include('livewire.utilisateurs.liste')
@else
    @include('livewire.utilisateurs.create')
@endif
<script>
//   window.addEventListener('showSuccessMessage',event=>{
//        Swal.fire({
//            postion: 'top-end',
//            icon: 'success',
//            toast: true,
//            title: 'Opération effectuée avec succè!',
//            showConfirmButton: false,
//            timer: 3000
//        })
//    })
</script>


