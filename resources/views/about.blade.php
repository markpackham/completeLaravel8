@unless(empty($name))
    <h2>Name isn't empty</h2>
@endunless

@empty($aNonExistantVariable)
    <h2>The variable is empty</h2>
@endempty

@isset($name)
    <h2>Name has been set</h2>
@endisset
