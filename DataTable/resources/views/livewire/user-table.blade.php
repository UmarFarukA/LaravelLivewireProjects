
<div>
    <section class="mt-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-around align-items-center ">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search fs-2" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </span>
                    <input wire:model.live.debounce.300ms="search" type="text" class="form-control mx-2">
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <label for="perpage" class="mx-2">User Type:</label>
                    <div>
                        <select wire:model.live='admin' class="form-select " aria-label="Default select example" id="perpage">
                            <option value="">All</option>
                            <option value="0">Members</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <table class="table">
                  <thead>
                    <tr>

                        @include('livewire.includes.table-header', [
                            'fieldName' => 'name',
                            'displayName' => 'Name'
                        ])
                         @include('livewire.includes.table-header', [
                            'fieldName' => 'email',
                            'displayName' => 'Email'
                        ])
                         @include('livewire.includes.table-header', [
                            'fieldName' => 'is_admin',
                            'displayName' => 'Role'
                        ])

                      <th scope="col">Joined</th>
                      <th scope="col">Last Update</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $user)
                    <tr wire:key='{{ $user->id }}'>
                      {{-- <th scope="row">1</th> --}}
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->is_admin ? 'Admin' : 'Member' }}</td>
                      <td>{{ $user->created_at }}</td>
                      <td>{{ $user->updated_at }}</td>
                      <td>
                            <button wire:click='delete({{ $user->id }})' type="submit" class="btn btn-sm btn-danger">X</button>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-between align-items-center card-footer text-body-secondary" style="gap: 10px">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="perpage" class="mx-2">Per Page</label>
                        <div>
                            <select wire:model.live='per_page' class="form-select" aria-label="Default select example" id="perpage">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                </div>
                <div class="pagination justify-content-end align-items-center">
                    {{-- {{ $users->links() }} --}}
                </div>

            </div>
        </div>
    </section>
</div>
