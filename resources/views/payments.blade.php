@include("nav")
<table>
    <tr>
        <th>#</th>
        <th>Дата</th>
        <th>Счет</th>
        <th>Контрагент</th>
        <th>Получатель</th>
        <th>Основание</th>
        <th>Основание наше</th>
        <th>Сумма</th>
        <th> </th>
    </tr>
    @foreach ($payments as $payment)
        <tr>
            <th>{{ $payment->id }}</th>
            <th>{{ $payment->data_plateg }}</th>
            <th>{{ $payment->PlatelshchiKRasCHSchet }}</th>
            <th>{{ $payment->PlatelshchiKINN }}</th>
            <th>{{ $payment->PoluchatelINN }}</th>
            <th>{{ $payment->osnovanie_user }}</th>
            <th>{{ $payment->Tip_plateg }}</th>
            <th>{{ $payment->summ_plateg }}</th>
            <th></th>
        </tr>
    @endforeach
</table>
{{$payments->links()}}
