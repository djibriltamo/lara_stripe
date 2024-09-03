<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 How To Integrate Stripe Payment Gateway</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css" integrity="sha512-3PN6gfRNZEX4YFyz+sIyTF6pGlQiryJu9NlGhu9LrLMQ7eDjNgudQoFDK3WSNAayeIKc6B8WXXpo4a7HqxjKwg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class='row'>
            <h1>Intégration de Stripe Payment pour les paiements</h1>
            <div class='col-md-12'>
                <div class="card">
                    <div class="card-header">
                    Stripe Payment
                    </div>
                    <div class="card-body">
                    <table id="cart" class="table table-hover table-condensed">

                    <thead>
                        <tr>
                            <th style="width:50%">Produit</th>
                            <th style="width:10%">Prix</th>
                            <th style="width:8%">Quantité</th>
                            <th style="width:22%" class="text-center">Total</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="{{ asset('img') }}/interface.png" width="100" height="100" class="img-responsive"/></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">Asus Vivobook 17 Laptop - Intel Core 10th</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$6</td>
                            <td data-th="Quantity">
                                <input type="number" value="1" class="form-control quantity cart_update" min="1" />
                            </td>
                            <td data-th="Subtotal" class="text-center">$6</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Supprimer</button>
                            </td>
                        </tr>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align:right;"><h3><strong>Total $6</strong></h3></td>
                        </tr>
                        <tr>
                            <td colspan="5" style="text-align:right;">

                                <form action="/session" method="POST">

                                    <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continuer d'acheter</a>

                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type='hidden' name="total" value="6">
                                        <input type='hidden' name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">

                                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Payer</button>
                                    
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>