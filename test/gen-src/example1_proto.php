<?hh // strict
namespace foo\bar;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: example1.proto

newtype AEnum1_EnumType as int = int;
class AEnum1 {
  const AEnum1_EnumType A = 0;
  const AEnum1_EnumType B = 2;
  public static function FromInt(int $i): AEnum1_EnumType {
    return $i;
  }
}

// message example2
class example2 implements \Protobuf\Message {
  // field aint32 = 1
  public int $aint32;

  public function __construct() {
    $this->aint32 = 0;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->aint32 = $d->readVarInt128();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->aint32 !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarInt128($this->aint32);
    }
  }
}

newtype example1_AEnum2_EnumType as int = int;
class example1_AEnum2 {
  const example1_AEnum2_EnumType C = 0;
  const example1_AEnum2_EnumType D = 10;
  public static function FromInt(int $i): example1_AEnum2_EnumType {
    return $i;
  }
}

// message example2
class example1_example2 implements \Protobuf\Message {
  // field astring = 1
  public string $astring;

  public function __construct() {
    $this->astring = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->astring = $d->readString();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->astring !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->astring);
    }
  }
}

// message AmapEntry
class example1_AmapEntry implements \Protobuf\Message {
  // field key = 1
  public string $key;
  // field value = 2
  public string $value;

  public function __construct() {
    $this->key = '';
    $this->value = '';
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->key = $d->readString();
          break;
        case 2:
          $this->value = $d->readString();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->key !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->key);
    }
    if ($this->value !== '') {
      $e->writeTag(2, 2);
      $e->writeString($this->value);
    }
  }
}

// message Amap2Entry
class example1_Amap2Entry implements \Protobuf\Message {
  // field key = 1
  public string $key;
  // field value = 2
  public ?\fiz\baz\example2 $value;

  public function __construct() {
    $this->key = '';
    $this->value = null;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->key = $d->readString();
          break;
        case 2:
          if ($this->value == null) {
            $this->value = new \fiz\baz\example2();
          }
          $this->value->MergeFrom($d->readDecoder());
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->key !== '') {
      $e->writeTag(1, 2);
      $e->writeString($this->key);
    }
    $msg = $this->value;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 2);
    }
  }
}

// message example1
class example1 implements \Protobuf\Message {
  // field adouble = 1
  public float $adouble;
  // field afloat = 2
  public float $afloat;
  // field aint32 = 3
  public int $aint32;
  // field aint64 = 4
  public int $aint64;
  // field auint32 = 5
  public int $auint32;
  // field auint64 = 6
  public int $auint64;
  // field asint32 = 7
  public int $asint32;
  // field asint64 = 8
  public int $asint64;
  // field afixed32 = 9
  public int $afixed32;
  // field afixed64 = 10
  public int $afixed64;
  // field asfixed32 = 11
  public int $asfixed32;
  // field asfixed64 = 12
  public int $asfixed64;
  // field abool = 13
  public bool $abool;
  // field astring = 14
  public string $astring;
  // field abytes = 15
  public string $abytes;
  // field aenum1 = 20
  public \foo\bar\AEnum1_EnumType $aenum1;
  // field aenum2 = 21
  public \foo\bar\example1_AEnum2_EnumType $aenum2;
  // field aenum22 = 22
  public \fiz\baz\AEnum2_EnumType $aenum22;
  // field manystring = 30
  public vec<string> $manystring;
  // field manyint64 = 31
  public vec<int> $manyint64;
  // field aexample2 = 40
  public ?\foo\bar\example1_example2 $aexample2;
  // field aexample22 = 41
  public ?\foo\bar\example2 $aexample22;
  // field aexample23 = 42
  public ?\fiz\baz\example2 $aexample23;
  // field amap = 51
  public dict<string, string> $amap;
  // field amap2 = 52
  public dict<string, ?\fiz\baz\example2> $amap2;
  // field outoforder = 49
  public int $outoforder;
  // field oostring = 60
  public string $oostring;
  // field ooint = 61
  public int $ooint;

  public function __construct() {
    $this->adouble = 0.0;
    $this->afloat = 0.0;
    $this->aint32 = 0;
    $this->aint64 = 0;
    $this->auint32 = 0;
    $this->auint64 = 0;
    $this->asint32 = 0;
    $this->asint64 = 0;
    $this->afixed32 = 0;
    $this->afixed64 = 0;
    $this->asfixed32 = 0;
    $this->asfixed64 = 0;
    $this->abool = false;
    $this->astring = '';
    $this->abytes = '';
    $this->aenum1 = \foo\bar\AEnum1::A;
    $this->aenum2 = \foo\bar\example1_AEnum2::C;
    $this->aenum22 = \fiz\baz\AEnum2::Z;
    $this->manystring = vec[];
    $this->manyint64 = vec[];
    $this->aexample2 = null;
    $this->aexample22 = null;
    $this->aexample23 = null;
    $this->amap = dict[];
    $this->amap2 = dict[];
    $this->outoforder = 0;
    $this->oostring = '';
    $this->ooint = 0;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->adouble = $d->readDouble();
          break;
        case 2:
          $this->afloat = $d->readFloat();
          break;
        case 3:
          $this->aint32 = $d->readVarInt128();
          break;
        case 4:
          $this->aint64 = $d->readVarInt128();
          break;
        case 5:
          $this->auint32 = $d->readVarInt128();
          break;
        case 6:
          $this->auint64 = $d->readVarInt128();
          break;
        case 7:
          $this->asint32 = $d->readVarInt128ZigZag();
          break;
        case 8:
          $this->asint64 = $d->readVarInt128ZigZag();
          break;
        case 9:
          $this->afixed32 = $d->readLittleEndianInt32();
          break;
        case 10:
          $this->afixed64 = $d->readLittleEndianInt64();
          break;
        case 11:
          $this->asfixed32 = $d->readLittleEndianInt32();
          break;
        case 12:
          $this->asfixed64 = $d->readLittleEndianInt64();
          break;
        case 13:
          $this->abool = $d->readBool();
          break;
        case 14:
          $this->astring = $d->readString();
          break;
        case 15:
          $this->abytes = $d->readString();
          break;
        case 20:
          $this->aenum1 = \foo\bar\AEnum1::FromInt($d->readVarInt128());
          break;
        case 21:
          $this->aenum2 = \foo\bar\example1_AEnum2::FromInt($d->readVarInt128());
          break;
        case 22:
          $this->aenum22 = \fiz\baz\AEnum2::FromInt($d->readVarInt128());
          break;
        case 30:
          $this->manystring []= $d->readString();
          break;
        case 31:
          if ($wt == 2) {
            $packed = $d->readDecoder();
            while (!$packed->isEOF()) {
              $this->manyint64 []= $packed->readVarInt128();
            }
          } else {
            $this->manyint64 []= $d->readVarInt128();
          }
          break;
        case 40:
          if ($this->aexample2 == null) {
            $this->aexample2 = new \foo\bar\example1_example2();
          }
          $this->aexample2->MergeFrom($d->readDecoder());
          break;
        case 41:
          if ($this->aexample22 == null) {
            $this->aexample22 = new \foo\bar\example2();
          }
          $this->aexample22->MergeFrom($d->readDecoder());
          break;
        case 42:
          if ($this->aexample23 == null) {
            $this->aexample23 = new \fiz\baz\example2();
          }
          $this->aexample23->MergeFrom($d->readDecoder());
          break;
        case 49:
          $this->outoforder = $d->readVarInt128();
          break;
        case 51:
          $obj = new \foo\bar\example1_AmapEntry();
          $obj->MergeFrom($d->readDecoder());
          $this->amap[$obj->key] = $obj->value;
          break;
        case 52:
          $obj = new \foo\bar\example1_Amap2Entry();
          $obj->MergeFrom($d->readDecoder());
          $this->amap2[$obj->key] = $obj->value;
          break;
        case 60:
          $this->oostring = $d->readString();
          break;
        case 61:
          $this->ooint = $d->readVarInt128();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->adouble !== 0.0) {
      $e->writeTag(1, 1);
      $e->writeDouble($this->adouble);
    }
    if ($this->afloat !== 0.0) {
      $e->writeTag(2, 5);
      $e->writeFloat($this->afloat);
    }
    if ($this->aint32 !== 0) {
      $e->writeTag(3, 0);
      $e->writeVarInt128($this->aint32);
    }
    if ($this->aint64 !== 0) {
      $e->writeTag(4, 0);
      $e->writeVarInt128($this->aint64);
    }
    if ($this->auint32 !== 0) {
      $e->writeTag(5, 0);
      $e->writeVarInt128($this->auint32);
    }
    if ($this->auint64 !== 0) {
      $e->writeTag(6, 0);
      $e->writeVarInt128($this->auint64);
    }
    if ($this->asint32 !== 0) {
      $e->writeTag(7, 0);
      $e->writeVarInt128ZigZag($this->asint32);
    }
    if ($this->asint64 !== 0) {
      $e->writeTag(8, 0);
      $e->writeVarInt128ZigZag($this->asint64);
    }
    if ($this->afixed32 !== 0) {
      $e->writeTag(9, 5);
      $e->writeLittleEndianInt32($this->afixed32);
    }
    if ($this->afixed64 !== 0) {
      $e->writeTag(10, 1);
      $e->writeLittleEndianInt64($this->afixed64);
    }
    if ($this->asfixed32 !== 0) {
      $e->writeTag(11, 5);
      $e->writeLittleEndianInt32($this->asfixed32);
    }
    if ($this->asfixed64 !== 0) {
      $e->writeTag(12, 1);
      $e->writeLittleEndianInt64($this->asfixed64);
    }
    if ($this->abool !== false) {
      $e->writeTag(13, 0);
      $e->writeBool($this->abool);
    }
    if ($this->astring !== '') {
      $e->writeTag(14, 2);
      $e->writeString($this->astring);
    }
    if ($this->abytes !== '') {
      $e->writeTag(15, 2);
      $e->writeString($this->abytes);
    }
    if ($this->aenum1 !== \foo\bar\AEnum1::A) {
      $e->writeTag(20, 0);
      $e->writeVarInt128($this->aenum1);
    }
    if ($this->aenum2 !== \foo\bar\example1_AEnum2::C) {
      $e->writeTag(21, 0);
      $e->writeVarInt128($this->aenum2);
    }
    if ($this->aenum22 !== \fiz\baz\AEnum2::Z) {
      $e->writeTag(22, 0);
      $e->writeVarInt128($this->aenum22);
    }
    foreach ($this->manystring as $elem) {
      $e->writeTag(30, 2);
      $e->writeString($elem);
    }
    $packed = new \Protobuf\Internal\Encoder();
    foreach ($this->manyint64 as $elem) {
      $packed->writeVarInt128($elem);
    }
    $e->writeEncoder($packed, 31);
    $msg = $this->aexample2;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 40);
    }
    $msg = $this->aexample22;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 41);
    }
    $msg = $this->aexample23;
    if ($msg != null) {
      $nested = new \Protobuf\Internal\Encoder();
      $msg->WriteTo($nested);
      $e->writeEncoder($nested, 42);
    }
    if ($this->outoforder !== 0) {
      $e->writeTag(49, 0);
      $e->writeVarInt128($this->outoforder);
    }
    foreach ($this->amap as $k => $v) {
      $obj = new \foo\bar\example1_AmapEntry();
      $obj->key = $k;
      $obj->value = $v;
      $nested = new \Protobuf\Internal\Encoder();
      $obj->WriteTo($nested);
      $e->writeEncoder($nested, 51);
    }
    foreach ($this->amap2 as $k => $v) {
      $obj = new \foo\bar\example1_Amap2Entry();
      $obj->key = $k;
      $obj->value = $v;
      $nested = new \Protobuf\Internal\Encoder();
      $obj->WriteTo($nested);
      $e->writeEncoder($nested, 52);
    }
    if ($this->oostring !== '') {
      $e->writeTag(60, 2);
      $e->writeString($this->oostring);
    }
    if ($this->ooint !== 0) {
      $e->writeTag(61, 0);
      $e->writeVarInt128($this->ooint);
    }
  }
}

class ExampleServiceClient {
  public function __construct(private \Grpc\ClientConn $cc) {
  }

  public async function OneToTwo(\Grpc\Context $ctx, \foo\bar\example1 $in, \Grpc\CallOption ...$co): Awaitable<\foo\bar\example2> {
    $out = new \foo\bar\example2();
    await $this->cc->Invoke($ctx, 'foo.bar.ExampleService/OneToTwo', $in, $out, ...$co);
    return $out;
  }
}

interface ExampleServiceServer {
  public function OneToTwo(\Grpc\Context $ctx, \foo\bar\example1 $in): \foo\bar\example2;
}

class ExampleServiceServerDispatch implements \Grpc\ServerDispatch {
  public function __construct(public ExampleServiceServer $server) {
  }

  public function Name(): string {
    return 'foo.bar.ExampleService';
  }

  public function Dispatch(\Grpc\Context $ctx, string $method, string $rawin): string {
    switch ($method) {
      case 'OneToTwo':
        $in = new \foo\bar\example1();
        \Protobuf\Unmarshal($rawin, $in);
        $out = $this->server->OneToTwo($ctx, $in);
        return \Protobuf\Marshal($out);
    }
    throw new \Grpc\GrpcException(\Grpc\Codes::Unimplemented, 'unknown method: ' . $method);
    return '';
  }
}
