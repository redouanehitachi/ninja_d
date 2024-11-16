<x-layout>
    <h2>{{$ninja->name}}</h2>
    <div class="bg-gray-200 p-4 rounded">
      <p><strong>Skill level:{{$ninja->skill}}</strong></p>
      <p><strong>About me:</strong></p>
      <p>{{$ninja->bio}}</p>
    </div>

    
    <div class="border-2 border-dashed bg-dashed bg-white px-4 pb-4 my-4 rounded">
      <h3>Dojo Information</h3>
      <p><strong>Dojo name:</strong>{{$ninja->dojo->name}}</p>
      <p><strong>Dojo Location:</strong>{{$ninja->dojo->location}}</p>
      <p><strong>Dojo Description:</strong></p>
      <p>{{$ninja->dojo->description}}</p>
    </div>
  </x-layout>