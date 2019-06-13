<?hh // strict

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: example4.proto

class pb_Class implements \Protobuf\Message {
  public string $name;
  private string $XXX_skipped;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->XXX_skipped = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->name = $d->readString();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_skipped = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->name !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->name);
    }
    $e->writeRaw($this->XXX_skipped);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('name', 'name', $this->name, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'name':
          $this->name = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
      }
    }
  }
}

class pb_Interface implements \Protobuf\Message {
  public ?\pb_Class $class;
  private string $XXX_skipped;

  public function __construct(shape(
    ?'class' => ?\pb_Class,
  ) $s = shape()) {
    $this->class = $s['class'] ?? null;
    $this->XXX_skipped = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          if ($this->class == null) $this->class = new \pb_Class();
          $this->class->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_skipped = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    $msg = $this->class;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 1);
    }
    $e->writeRaw($this->XXX_skipped);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeMessage('class', 'class', $this->class, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'class':
          if ($v === null) break;
          if ($this->class == null) $this->class = new \pb_Class();
          $this->class->MergeJsonFrom($v);
          break;
      }
    }
  }
}

class NotClass implements \Protobuf\Message {
  public string $name;
  private string $XXX_skipped;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->XXX_skipped = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->name = $d->readString();
          break;
        default:
          $d->skip($fn, $wt);
      }
    }
    $this->XXX_skipped = $d->skippedRaw();
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->name !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->name);
    }
    $e->writeRaw($this->XXX_skipped);
  }

  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeString('name', 'name', $this->name, false);
  }

  public function MergeJsonFrom(mixed $m): void {
    if ($m === null) return;
    $d = \Protobuf\Internal\JsonDecoder::readObject($m);
    foreach ($d as $k => $v) {
      switch ($k) {
        case 'name':
          $this->name = \Protobuf\Internal\JsonDecoder::readString($v);
          break;
      }
    }
  }
}

class AndClient {
  public function __construct(private \Grpc\Invoker $invoker) {
  }

  public async function throw(\Grpc\Context $ctx, \pb_Class $in, \Grpc\CallOption ...$co): Awaitable<\google\protobuf\pb_Empty> {
    $out = new \google\protobuf\pb_Empty();
    await $this->invoker->Invoke($ctx, '/And/throw', $in, $out, ...$co);
    return $out;
  }
}

interface AndServer {
  public function throw(\Grpc\Context $ctx, \pb_Class $in): \google\protobuf\pb_Empty;
}

function AndServiceDescriptor(AndServer $service): \Grpc\ServiceDesc {
  $methods = vec[];
  $handler = function(\Grpc\Context $ctx, \Grpc\Unmarshaller $u): \Protobuf\Message use ($service) {
    $in = new \pb_Class();
    $u->Unmarshal($in);
    return $service->throw($ctx, $in);
  };
  $methods []= new \Grpc\MethodDesc('throw', $handler);
  return new \Grpc\ServiceDesc('And', $methods);
}

function RegisterAndServer(\Grpc\Server $server, AndServer $service): void {
  $server->RegisterService(AndServiceDescriptor($service));
}

class XXX_FileDescriptor_example4__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'example4.proto';
  const string RAW =
  'eNri4kutSMwtyEk10Ssoyi/Jl5JOz89Pz0nVB/OSStP0U3MLSiohkkrSXKzOOYnFxUJCXC'
  .'x5ibmpEowKjBqcQWC2kiYXp2deSWpRWmJyqpAMF2sySCVYBbcRmx5YXxBEUEmOi8MvvwSn'
  .'UUYGXMyOeSlCmlysJRlF+eVCUO1SYnoQ1+nBXKfnCnKdEkMSG1jEGBAAAP//vs48Lg';
  public function Name(): string {
    return self::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)\gzuncompress(\base64_decode(self::RAW));
  }
}
