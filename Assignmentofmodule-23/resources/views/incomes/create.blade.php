<form action="{{ route('incomes.store') }}" method="POST">
    @csrf
    <label for="amount">Amount:</label>
    <input type="text" name="amount" value="{{ old('amount') }}" required>
    @error('amount')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="description">Description:</label>
    <input type="text" name="description" value="{{ old('description') }}" required>
    @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="date">Date:</label>
    <input type="date" name="date" value="{{ old('date') }}" required>
    @error('date')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Add Income</button>
</form>