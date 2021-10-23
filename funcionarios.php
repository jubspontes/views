<figure class ="text-end" style="margin-right:30px,">
<blockquote class="blockquote">
    <p> A well-know quote, contained in a blockquote element. </p>
</blockquote>
<figcaption class= "blockquote-footer">
    Someone famous in <cite title= "Source title"> Source title</cite>
</figcaption>
</figure>
<div class= "container-fluid" style= "margin-top:30px">
    <div class="shadow-1g p-3 mb-5 bg-body rounded">
        <h1 class="display-6">Funcionarios </h1>
        <?php
        echo '<table class="table">';
        echo '<tr>';
        echo '<th>Nome</th>';
        echo '<th>Cpf</th>';
        echo '<th>telefone</th>';
        echo '<th>papel</th>';
        echo '</tr>';
        foreach($users as $user){
            echo '<tr>';
            echo '<td>'.$user->nome.'</td>';
            echo '<td>' .$user->cpf.'</td>';
            echo '<td>'.$user->telefone.'</td>';
            echo '<td>'.$user->papel.'</td>';
            echo '<td>';
            echo '<i class="fas fa-eye"></i> style="margin-right:5px"></i>';
            echo '<i class="fas fa-edit"></i> style="margin-right:5px"></i>';
            echo '<i class="fas fa-trash"></i> style="margin-right:5px"></i>';
            echo '<i class="fab fa-github"></i> style="margin-right:5px"></i>';
            echo '</td>';
         echo '</tr>';
        }
    echo '</table>';
        ?>
       
        </div>
 </div>