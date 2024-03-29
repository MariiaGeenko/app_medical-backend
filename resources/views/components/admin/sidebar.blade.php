<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.main.index') }}">
            <span data-feather="main"></span>Главная <span class="sr-only">(current)</span></a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.receipts.index') }}">
            <span data-feather="file"></span>Рецепты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.drugs.index') }}">
              <span data-feather="file"></span>Лекарства</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.pharmacies.index') }}">
        <span data-feather="file"></span>Аптеки</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.clinics.index') }}">
          <span data-feather="file"></span>Клиники</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.doctors.index') }}">
            <span data-feather="file"></span>Врачи</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.patients.index') }}">
            <span data-feather="file"></span>Пациенты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.organization_types.index') }}">
            <span data-feather="file"></span>Типы организаций</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.specialities.index') }}">
          <span data-feather="file"></span>Специальности врачей</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.diagnoses.index') }}">
          <span data-feather="file"></span>Справочник заболеваний</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.doctor_reviews.index') }}">
        <span data-feather="file"></span>Осмотры</a>
        </li> --}}
        
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.meetings.index') }}">
          <span data-feather="file"></span>Консультации</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.video_calls.index') }}">
        <span data-feather="file"></span>Видео-консультации</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.services.index') }}">
          <span data-feather="file"></span>Сервисы</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.messages.index') }}">
          <span data-feather="file"></span>Сообщения</a>
        </li> --}}
        {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.users.index') }}">
          <span data-feather="file"></span>Пользователи</a>
        </li> --}}
      </ul>
    </div>
  </nav>