<!-- forelse is like foreach but does compile check for empty input -->
@forelse($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>There are no names</h2>
@endforelse
