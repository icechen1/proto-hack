<?hh // strict
namespace fiz\baz;

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// Source: example2.proto

newtype AEnum2_EnumType as int = int;
class AEnum2 {
  const AEnum2_EnumType Z = 0;
  private static dict<int, string> $itos = dict[
    0 => 'Z',
  ];
  public static function NumbersToNames(): dict<int, string> {
    return self::$itos;
  }
  public static function FromInt(int $i): AEnum2_EnumType {
    return $i;
  }
}

// message example2
class example2 implements \Protobuf\Message {
  // field zomg = 1
  public int $zomg;

  public function __construct() {
    $this->zomg = 0;
  }

  public function MergeFrom(\Protobuf\Internal\Decoder $d): void {
    while (!$d->isEOF()){
      list($fn, $wt) = $d->readTag();
      switch ($fn) {
        case 1:
          $this->zomg = $d->readVarint32();
          break;
        default:
          $d->skipWireType($wt);
      }
    }
  }

  public function WriteTo(\Protobuf\Internal\Encoder $e): void {
    if ($this->zomg !== 0) {
      $e->writeTag(1, 0);
      $e->writeVarint($this->zomg);
    }
  }
  public function WriteJsonTo(\Protobuf\Internal\JsonEncoder $e): void {
    $e->writeNum('zomg', 'zomg', $this->zomg);
  }
}


class __FileDescriptor_example2__proto implements \Protobuf\Internal\FileDescriptor {
  const string NAME = 'example2.proto';
  const string RAW = 'H4sIAAAAAAAC/zSPvUrEUBCF5/fm5mw0cSorESux2GJ9AgsbS0u7XVhFMGYRBcmr+XJyE253Ps7MNwzOj7/78fRx3G1PX9P3FM3r+7w97OebK+RaRcDmaXy75Gu+9ecl3/VID4+fP+MuHPwy0NMfI4URgZHBXShRlCShknsAYhRmlBiAGnGo5QEbmJFQqMsFzuAFLMzFAt2KXsqmEod67ippqPdDsTuF5XIdUC9T2TfF7ou9lVxWfBW0opUktE3NIS3v3/8DAAD//w';
  public function Name(): string {
    return __FileDescriptor_example2__proto::NAME;
  }

  public function FileDescriptorProtoBytes(): string {
    return (string)gzuncompress(base64_decode(__FileDescriptor_example2__proto::RAW));
  }
}
