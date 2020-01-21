@extends('layouts.app')
@section('content')

    <h1 class="font-bold text-2xl text-gray-900 ">Example Project</h1>
    <p class="mb-6">This is just a example text for my tutorial.</p>

    <button
      class="bg-blue-600 text-white px-4 py-2 text-sm uppercase tracking-wide font-bold rounded-lg"
      @click="exampleModalShowing = true"
    >
      Show Modal
    </button>
    <card-modal :showing="exampleModalShowing" @close="exampleModalShowing = false">
      <h2 class="text-xl font-bold text-gray-900">Example modal</h2>
      <p class="mb-6">This is example text passed through to the modal via a slot.</p>
      <button
        class="bg-blue-600 text-white px-4 py-2 text-sm uppercase tracking-wide font-bold rounded-lg"
        @click="exampleModalShowing = false"
      >
        Close
    </button>
    </card-modal>

    <p>¿Qué es Lorem Ipsum?
      Lorem Ipsum es simplemente un texto ficticio de la industria de impresión y composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500, cuando una impresora desconocida tomó una galera de tipo y la mezcló para hacer un libro de muestras. Ha sobrevivido no solo cinco siglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de las hojas de Letraset que contienen pasajes de Lorem Ipsum, y más recientemente con software de publicación de escritorio como Aldus PageMaker que incluye versiones de Lorem Ipsum.

      ¿Por qué lo usamos?
      Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar 'Contenido aquí, contenido aquí', lo que hace que parezca un inglés legible. Muchos paquetes de edición de escritorio y editores de páginas web ahora usan Lorem Ipsum como texto de modelo predeterminado, y una búsqueda de 'lorem ipsum' descubrirá muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y similares).


      ¿De dónde viene?
      Contrariamente a la creencia popular, Lorem Ipsum no es simplemente un texto aleatorio. Tiene raíces en una pieza de literatura latina clásica del 45 a. C., con más de 2000 años de antigüedad. Richard McClintock, profesor de latín en el Hampden-Sydney College en Virginia, buscó una de las palabras latinas más oscuras, consectetur, de un pasaje de Lorem Ipsum, y al revisar las citas de la palabra en la literatura clásica, descubrió la fuente indudable. Lorem Ipsum proviene de las secciones 1.10.32 y 1.10.33 de "de Finibus Bonorum et Malorum" (Los extremos del bien y del mal) de Cicero, escrito en 45 a. Este libro es un tratado sobre la teoría de la ética, muy popular durante el Renacimiento. La primera línea de Lorem Ipsum, "Lorem ipsum dolor sit amet ..", proviene de una línea en la sección 1.10.32.

      El fragmento estándar de Lorem Ipsum utilizado desde el año 1500 se reproduce a continuación para los interesados. Las secciones 1.10.32 y 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero también se reproducen en su forma original exacta, acompañadas de versiones en inglés de la traducción de 1914 de H. Rackham.

      ¿Dónde puedo conseguir algunas?
      Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría ha sufrido alteración de alguna forma, por humor inyectado o palabras aleatorias que no parecen ni siquiera un poco creíbles. Si va a utilizar un pasaje de Lorem Ipsum, debe asegurarse de que no haya nada vergonzoso oculto en medio del texto. Todos los generadores Lorem Ipsum en Internet tienden a repetir fragmentos predefinidos según sea necesario, lo que lo convierte en el primer generador verdadero en Internet. Utiliza un diccionario de más de 200 palabras latinas, combinado con un puñado de estructuras de oraciones modelo, para generar Lorem Ipsum que parece razonable. Por lo tanto, el Lorem Ipsum generado siempre está libre de repetición, humor inyectado o palabras no características, etc.
      Lorem Ipsum es simplemente un texto ficticio de la industria de impresión y composición tipográfica. Lorem Ipsum ha sido el texto ficticio estándar de la industria desde el año 1500, cuando una impresora desconocida tomó una galera de tipo y la mezcló para hacer un libro de muestras. Ha sobrevivido no solo cinco siglos, sino también el salto a la composición electrónica, permaneciendo esencialmente sin cambios. Se popularizó en la década de 1960 con el lanzamiento de las hojas de Letraset que contienen pasajes de Lorem Ipsum, y más recientemente con software de publicación de escritorio como Aldus PageMaker que incluye versiones de Lorem Ipsum.

      ¿Por qué lo usamos?
      Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página al mirar su diseño. El punto de usar Lorem Ipsum es que tiene una distribución de letras más o menos normal, en lugar de usar 'Contenido aquí, contenido aquí', lo que hace que parezca un inglés legible. Muchos paquetes de edición de escritorio y editores de páginas web ahora usan Lorem Ipsum como texto de modelo predeterminado, y una búsqueda de 'lorem ipsum' descubrirá muchos sitios web aún en su infancia. Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito (humor inyectado y similares).


      ¿De dónde viene?
      Contrariamente a la creencia popular, Lorem Ipsum no es simplemente un texto aleatorio. Tiene raíces en una pieza de literatura latina clásica del 45 a. C., con más de 2000 años de antigüedad. Richard McClintock, profesor de latín en el Hampden-Sydney College en Virginia, buscó una de las palabras latinas más oscuras, consectetur, de un pasaje de Lorem Ipsum, y al revisar las citas de la palabra en la literatura clásica, descubrió la fuente indudable. Lorem Ipsum proviene de las secciones 1.10.32 y 1.10.33 de "de Finibus Bonorum et Malorum" (Los extremos del bien y del mal) de Cicero, escrito en 45 a. Este libro es un tratado sobre la teoría de la ética, muy popular durante el Renacimiento. La primera línea de Lorem Ipsum, "Lorem ipsum dolor sit amet ..", proviene de una línea en la sección 1.10.32.

      El fragmento estándar de Lorem Ipsum utilizado desde el año 1500 se reproduce a continuación para los interesados. Las secciones 1.10.32 y 1.10.33 de "de Finibus Bonorum et Malorum" de Cicero también se reproducen en su forma original exacta, acompañadas de versiones en inglés de la traducción de 1914 de H. Rackham.

      ¿Dónde puedo conseguir algunas?
      Hay muchas variaciones de pasajes de Lorem Ipsum disponibles, pero la mayoría ha sufrido alteración de alguna forma, por humor inyectado o palabras aleatorias que no parecen ni siquiera un poco creíbles. Si va a utilizar un pasaje de Lorem Ipsum, debe asegurarse de que no haya nada vergonzoso oculto en medio del texto. Todos los generadores Lorem Ipsum en Internet tienden a repetir fragmentos predefinidos según sea necesario, lo que lo convierte en el primer generador verdadero en Internet. Utiliza un diccionario de más de 200 palabras latinas, combinado con un puñado de estructuras de oraciones modelo, para generar Lorem Ipsum que parece razonable. Por lo tanto, el Lorem Ipsum generado siempre está libre de repetición, humor inyectado o palabras no características, etc.
   
    </p>

@endsection