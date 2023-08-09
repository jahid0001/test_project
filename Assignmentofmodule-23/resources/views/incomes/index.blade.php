@foreach ($incomes as $income)
    <p>{{ $income->amount }} - {{ $income->description }} - {{ $income->date }}</p>
@endforeach

{{ $incomes->links() }} <!-- Pagination links -->

@foreach ($incomes as $income)
    <p>
        {{ $income->amount }} - {{ $income->description }} - {{ $income->date }}
        <a href="{{ route('incomes.edit', $income->id) }}">Edit</a>
        <form action="{{ route('incomes.destroy', $income->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach


<p>Total Income: {{ $totalIncome }}</p>
<p>Total Expenses: {{ $totalExpenses }}</p>
<p>Net Income: {{ $netIncome }}</p>
