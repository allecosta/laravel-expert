
{{-- Sintaxe de uma variável utilizando o template blade --}}
{{ $variable }};

{{-- Sintaxe da condicional IF-ELSE utilizando o template blade em um HTML --}}
<html>
    <body>
        <font size="5" face="Arial"> 
            @if ($id == 1)
                ID do estudante é igual a 1.    
            @else
                ID do estudante não é igual a 1.   
            @endif
        </font>
    </body>
</html>

{{-- Sintaxe do loop FOR utilizando o template blade --}}
@for ($a = 1; $a < 10; $a++)
    {{ $a }}
@endfor

{{-- Sintaxe do loop FOREACH utilizando o template blade --}}
@foreach ($students as $student)
    {{ $student }}  
@endforeach

{{-- Sintaxe do loop WHILE utilizando o template blade --}}
@while ($a < 10)
    Tutorial Laravel
    {{ $a++ }}
@endwhile












