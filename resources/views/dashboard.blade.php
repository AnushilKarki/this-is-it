<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<li>
                                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                  
                                     
                                        <form id="two-factor" action="/user/two-factor-authentication" method="POST">
                                             @csrf
                                             @if(auth()->user()->two_factor_secret)
                                    @method('DELETE')
                                    <div>
                                      {!! auth()->user()->twoFactorQrCodeSvg() !!}
                                   </div>
                                      <button>Disable</button>
                                      @else
                                      <button>enable</button>
                                      @endif 
                                        </form>
                                    </div>
                                    <div>
                                    <h3>two factor recovery codes</h3>
                                    <ul>
                                
                                    </ul>
                                    </div>
                                     <div> 
                                     <a href="/user/two-factor-recovery-codes" onclick="event.preventDefault();
                                        document.getElementById('two-factor-recovery-codes').submit();">
                                        {{ __('regenerate-two-factor-authentication-codes')  }}
                                        </a>
                                        <form id="two-factor-recovery-codes" action="/user/two-factor-recovery-codes" method="POST">
                                             @csrf
                                        </form>
                                     </div>
                                     <div> 
                                     @if(auth()->user()->two_factor_secret)
                                       two factor is enabled
                                    
                                      @else
                                      two factor is disabled
                                      @endif 
                                     
                                      </div>
    
</body>
</html>