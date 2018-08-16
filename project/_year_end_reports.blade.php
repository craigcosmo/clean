<div class="vanso a18b60 text-center gr9">
   Årsbesked
</div>

<table class="table table-sm  table-striped kap table-sm table-striped kol molo ">
   <tr>
      <th class="jik"></th>
      <th class="a13b">ÅR</th>
      <th class="a13b text-right">BESKED</th>
      <th class="jik"></th>
   </tr>
   @if ($years->count())
      @foreach ($years as $year)
      
      <tr>
         <td class="jik"></td>
         <td>{{ $year }}</td>
         <td class="text-right"><a target="_blank" href="/settlement/year_end_report/{{ $year }}/0"><img class="pdf" src="{{ URL::asset('images/pepins_icon_download_pdf.png') }}" style="width:20px;height:20px;"></td>
         <td class="jik"></td>
      </tr>
   
      @endforeach
   @endif
</table>
<div class="vanso a18b60 text-center gr9 mb65">
</div>
<div class="vanso a18b60 text-center gr9">
   Årsbesked Bolag
</div>

<table class="table table-sm  table-striped kap table-sm table-striped kol molo ">
   <tr>
      <th class="jik"></th>
      <th class="a13b">ÅR</th>
      <th class="a13b text-right">BESKED</th>
      <th class="jik"></th>
   </tr>
   @if ($years->count())
      @foreach ($years as $year)
      
      <tr>
         <td class="jik"></td>
         <td>{{ $year }}</td>
         <td class="text-right"><a target="_blank" href="/settlement/year_end_report/{{ $year }}/1"><img class="pdf" src="{{ URL::asset('images/pepins_icon_download_pdf.png') }}" style="width:20px;height:20px;"></td>
         <td class="jik"></td>
      </tr>
   
      @endforeach
   @endif
</table>
<div class="vanso a18b60 text-center gr9 mb65">
</div>