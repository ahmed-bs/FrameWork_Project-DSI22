@component('mail::message')
# DSI2-ISET Bizerte

Dear **{{ $commande->date_commande.' '.$commande->num_commande}}**

We are happy to announce that your account has been created.<br>
These are the informations that we registred for you, can you please check and tell us if there is any mistake:
- **Phone**: {{ $commande->prix_commande}}
- **Email**: {{ $commande->description_commande }}


Thanks,<br>
{{ config('app.name') }}
@endcomponent
