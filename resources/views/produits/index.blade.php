@extends('../welcome')
<a href="#" class="btn btn-primary">Ajouter</a>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Actions</th>
    </thead>
    <tbody>
        @foreach ($produits as $produit)
        <tr>
            <td>{{$produit->id}}</td>
            <td>{{$produit->name}}</td>
            <td>{{$produit->price}}</td>
            <td>{{$produit->quantity}}</td>
            <td>{{$produit->description}}</td>
            <td>
                <a href="#" class="btn btn-info">Afficher</a>
                <a href="#" class="btn btn-success">Modifier</a>
                <a href="#" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>