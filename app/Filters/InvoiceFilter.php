<?php

    namespace App\Filters;


    use Illuminate\Http\Request;
    use App\Filters\ApiFilter;


    class InvoiceFilter extends ApiFilter {
        protected $safeParams = [
            'customerId' => ['eq'],
            'amount' => ['eq', 'gt', 'gte', 'lt', 'lte'],
            'status' => ['eq', 'ne'],
            'billedDated' => ['eq', 'gt', 'gte', 'lt', 'lte'],
            'paidDated' => ['eq', 'gt', 'gte', 'lt', 'lte'],

        ];
        protected $columnMap = [
            'customerId' => 'customerId',
            'billedDated' => 'billedDated',
            'paidDated' => 'paidDated'
        ];
        protected $operatosMap = [
            'eq' => '=',
            'lt' => '<',
            'lte' => '<=',
            'gt' => '>',
            'gte' => '>=',
            'ne' => '!='
        ];
    }
